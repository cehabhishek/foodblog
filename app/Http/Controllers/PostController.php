<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Mail\NewPostMail;
use App\Models\Subscriber;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
class PostController extends Controller
{
    public function index()
    {
        // dd('adas');
        $posts = Post::orderBy('id', 'DESC')->get();
        return view('admin.post.index', compact('posts'));
    }
    public function create()
    {
        $categories = Category::all();
        $countries = DB::table('countries')->get();
        return view('admin.post.create', compact('categories','countries'));
    }

    public function store(Request $request)
    {
        // $subscribers = Subscriber::all();
        // foreach ($subscribers as $key => $subscriber) {
        //     $this->sendMail($subscriber->email);
        // }
        // dd($subscribers);
        // dd($request->all());

        $rules = [
            "title"             => 'required|unique:posts',
            "meta_description"  => 'required',
            "description"       => 'required',
            "visibility"        => 'required',
            "category_id"       => 'required',
            // "sub_category"      => 'required',
            "keywords"          => 'required',
            "country"           => 'required',
            "date"              => 'required',
            'thumbnail'         => 'required|image|mimes:jpg,png,jpeg|max:1024',
        ];

        $this->validate($request, $rules);

        $image = Image::make($request->file('thumbnail'));

        $imageExtension  = strtolower(trim($request->file('thumbnail')->getclientoriginalextension()));
        $imageName = Str::slug($request->title) . time() . '.' . $imageExtension;

        $destinationPathThumbnail = public_path('/uploads/post/');
        $image->resize(1000, 666);
        $keywords = implode(', ', $request->keywords);

        $subCategoryId = SubCategory::where('name', $request->sub_category)->first();
        // dd($subCategoryId->id);
        // dd($keywords);
        $subCategoryId = $request->input('sub_category_id');
        $postData = [
            "title"             =>  $request->title,
            "slug"              =>  Str::slug($request->title),
            "meta_description"  =>  $request->meta_description,
            "description"       =>  $request->description,
            "visibility"        =>  $request->visibility,
            "category_id"       =>  $request->category_id,
            "sub_category"      =>  $request->sub_category,
            "sub_category_id"   =>  $subCategoryId ? $subCategoryId : null,
            "country"           =>  $request->country,
            "date"              =>  $request->date,
            "keywords"          =>  $keywords,
            "thumbnail"         =>  $imageName,
        ];
        $imageUrl = $request->root() . '/uploads/post/' . $imageName;
        $postUrl = $request->root() . '/' . Str::slug($request->title);
        // dd($postUrl);
        Post::insert($postData);
        $image->save($destinationPathThumbnail . $imageName);
        // $image->move(public_path('/uploads/post'), $imageName);
        // $subscribers = Subscriber::all();
        // foreach ($subscribers as $key => $subscriber) {
        //     $this->sendMail($request->title,$request->meta_description,$imageUrl,$postUrl,$subscriber->email);
        // }

        return back()->with('success', 'Post Added Successfuly');
    }
    public function edit($id)
    {
        $categories = Category::all();
        $post = Post::where('id', $id)->first();
        $subCategories = SubCategory::where('category_id', $post->category_id)->get();

        return view('admin.post.edit', compact('categories', 'post', 'subCategories'));
    }

    public function update(Request $request, $id)
    {

        $rules = [
            "title"             => 'required|unique:posts,title,' . $id,
            "meta_description"  => 'required',
            "description"       => 'required',
            "visibility"        => 'required',
            "category_id"       => 'required',
            // "sub_category"      => 'required',
            "keywords"          => 'required',
            'thumbnail'         => 'nullable|image|mimes:jpg,png,jpeg|max:1024',
        ];

        $this->validate($request, $rules);
        $keywords = implode(', ', $request->keywords);

        $subCategoryName = SubCategory::where('name', $request->sub_category)->first();

        if ($request->file('thumbnail') != null) {
            $post = Post::where('id', $id)->first();

            $image = Image::make($request->file('thumbnail'));

            $imageExtension  = strtolower(trim($request->file('thumbnail')->getclientoriginalextension()));
            $imageName = Str::slug($request->title) . time() . '.' . $imageExtension;

            $destinationPathThumbnail = public_path('/uploads/post/');
            $image->resize(1000, 666);
            unlink(public_path('/uploads/post/' . $post->thumbnail));
            $image->save($destinationPathThumbnail . $imageName);

            $subCategoryId = $request->input('sub_category_id');

            $postData = [
                "title"             =>  $request->title,
                "slug"              =>  Str::slug($request->title),
                "meta_description"  =>  $request->meta_description,
                "description"       =>  $request->description,
                "visibility"        =>  $request->visibility,
                "category_id"       =>  $request->category_id,
                "sub_category"      =>  $subCategoryName ? $subCategoryName : null,
                "sub_category_id"   =>  $subCategoryId ? $subCategoryId : null,
                "keywords"          =>  $keywords,
                "thumbnail"         =>  $imageName,
            ];
        } else {
            $postData = [
                "title"             =>  $request->title,
                "slug"              =>  Str::slug($request->title),
                "meta_description"  =>  $request->meta_description,
                "description"       =>  $request->description,
                "visibility"        =>  $request->visibility,
                "category_id"       =>  $request->category_id,
                "sub_category"      =>  $request->sub_category,
                "sub_category_id"   =>  $subCategoryId ? $subCategoryId : null,
                "keywords"          =>  $keywords,
            ];
        }

        Post::where('id', $id)->update($postData);
        return back()->with('success', 'Post Updated Successfully');
    }

    public function sendMail($title, $meta_description, $imageUrl, $postUrl, $email)
    {
        $mailData = [
            'title'         => $title,
            'description'   => $meta_description,
            'image'         => $imageUrl,
            'posturl'       => $postUrl
        ];

        Mail::to($email)->send(new NewPostMail($mailData));
    }

    public function uploadImage(Request $request){
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $uploadPath = public_path('uploads/post');
        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0755, true, true);
        }

        $file = $request->file('file');
        $fileName = Str::random(10) . '.' . $file->getClientOriginalExtension();
        $file->move($uploadPath, $fileName);

        return response()->json(['location' => asset('uploads/post/' . $fileName)]);
    }
}
