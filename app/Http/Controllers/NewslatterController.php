<?php

namespace App\Http\Controllers;

use App\Models\NewslaterTemplate;
use App\Models\Newslatter;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewPostMail;
use App\Mail\NewsLatterMail;
use App\Models\TrackNewslatter;

class NewslatterController extends Controller
{
    public function create()
    {
        $newslatterTemplates = NewslaterTemplate::latest()->get();

        return view('admin.newslatter.create_newslatter', compact('newslatterTemplates'));
    }

    public function store(Request $request)
    {
        $rules = [
            "name"              => 'required|unique:newslater_templates',
        ];
        $this->validate($request, $rules);

        NewslaterTemplate::insert(['name' => $request->name]);
        return back()->with('success', 'Template Created');
    }
    public function update(Request $request, $id)
    {
        $rules = [
            "name"              => 'required|unique:newslater_templates,name,' . $id,
        ];
        $this->validate($request, $rules);

        NewslaterTemplate::where('id', $id)->update(['name' => $request->name]);
        return back()->with('success', 'Template Updated');
    }

    public function templateCreate($id)
    {

        $templateId = $id;
        $newslatterTemplates = NewslaterTemplate::latest()->get();
        $newslatters = Newslatter::where('template_id', $id)->latest()->get();


        $posts = Post::latest()->get();

        return view('admin.newslatter.create_template', compact('newslatterTemplates', 'posts', 'templateId', 'newslatters'));
    }

    public function templateStore(Request $request)
    {
        $rules = [
            "name"              => 'required|unique:newslater_templates',
        ];
        $this->validate($request, $rules);

        NewslaterTemplate::insert(['name' => $request->name]);
        return back()->with('success', 'Template Created');
    }
    public function templateUpdate(Request $request, $id)
    {

        $rules = [
            "name"              => 'required|unique:newslater_templates,name,' . $id,
        ];
        $this->validate($request, $rules);

        NewslaterTemplate::where('id', $id)->update(['name' => $request->name]);
        return back()->with('success', 'Template Updated');
    }

    public function newslatterStore(Request $request, $id)
    {
        // dd(Str::uuid()->toString());
        // dd($request->all(), $id);
        // {{ route('post.detail', [
        //     'category' => $sliderPost->getCategory->slug,
        //     'sub_category' => $sliderPost->getSubCategory->slug,
        //     'post_slug' => $sliderPost->slug,
        // ]) }}
        $post_ids = $request->post ? explode(',', $request->post) : [];
        foreach ($post_ids as $post_id) {

            $mainUrl = $request->getSchemeAndHttpHost();
            $post = Post::find($post_id);
            $category = $post->getSubCategory->slug;
            $sub_category = $post->getCategory->slug;

            $finalUrl = $mainUrl . '/' . $category . '/' . $sub_category . '/' . $post->slug;

            $postData = [
                'template_id' => $id,
                'type' => 'Post',
                'unique_id' => Str::uuid()->toString(),
                'data_value' => $post_id,
                'redirect_url' => $finalUrl,
            ];

            Newslatter::insert($postData);
        }


        // dd($request->all(), $id);
        foreach ($request->file('bannerimage') as $index => $image) {
            $mainUrl = $request->getSchemeAndHttpHost();
            $imageName = time() . '_' . $index . '.' . $image->getClientOriginalExtension();
            $imagePath = 'uploads/template_banner';

            // Move image to the desired path
            $image->move(public_path($imagePath), $imageName);

            // Prepare data to save to the database
            $bannerData = [
                'template_id'   => $id,
                'type'          => 'Banner',
                'unique_id'     => Str::uuid()->toString(),
                'data_value'    => $mainUrl . '/' . $imagePath . '/' . $imageName,  // Store the image path
                'redirect_url'  => $request->bannerurl[$index]
            ];

            // Save the banner data to the database
            // Banner::create($bannerData);  // Uncomment this line to save to the database
            Newslatter::insert($bannerData);
            // Debug output (you can remove this in production)
            // dd($bannerData);
        }
    }

    public function sendNewslatterToUser($id)
    {
        
        // dd(base64_decode('Y2VoYWJoaXNoZWtAZ21haWwuY29t'));
        $newslatters = Newslatter::where('template_id', $id)->get();
        
        $email = base64_encode('cehabhishek@gmail.com');
        dd($newslatters);
        $mailData = [
            'title'         => 'title',
            'description'   => '$meta_description',
            'image'         => '$imageUrl',
            'posturl'       => '$postUrl',
            'email'         => 'cehabhishek@gmail.com'
        ];

        Mail::to('cehabhishek@gmail.com')->send(new NewsLatterMail($newslatters, $email));
    }


    public function trackNewslatter(Request $request)
    {
        $uid = $request->query('uid');
        $id = $request->query('id');

        $oldNewslatter = TrackNewslatter::where(['user_id' => base64_decode($uid), 'newslatter_id' => $id])->first();
        $redirectUrl = Newslatter::where('unique_id' ,$id)->first();
        // dd($redirectUrl->redirect_url);
        if(!$oldNewslatter){
            $trackData = [
                "user_id"           => base64_decode($uid),
                "newslatter_id"     => $id,
                "ip_address"        => $request->ip()
            ];
            TrackNewslatter::insert($trackData);

        }
        return redirect($redirectUrl->redirect_url);
        
        // return response()->json([
        //     'u' => $u,
        //     'id' => $id,
        //     'e' => $e,
        // ]);
    }
    public function testMail()
    {
        $mailData = [
            'title'         => 'title',
            'description'   => '$meta_description',
            'image'         => '$imageUrl',
            'posturl'       => '$postUrl'
        ];

        Mail::to('cehabhishek@gmail.com')->send(new NewsLatterMail($mailData, $email = 'adfd'));
    }
}
