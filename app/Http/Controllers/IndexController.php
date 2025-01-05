<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\SubCategory;
use App\Models\Subscriber;
use App\Models\WebsiteInfo;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Str;
use Illuminate\Http\Response;
use Symfony\Component\Process\Process;
use App\Mail\NewPostMail;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Mail as FacadesMail;
use App\Rules\ReCaptcha;
use Illuminate\Http\RedirectResponse;

class IndexController extends Controller
{
    public function index()
    {
        // $category = Category::where('name', 'Tutorials')->first();
        // $tutorials = SubCategory::where('category_id', $category->id)->get();
        $categories = Category::orderBy('id', 'DESC')->get();
        $sliderPosts = Post::latest()->get();

        return view('frontend.index', compact('categories','sliderPosts'));
    }

    public function categoryBlogList($cat_id, $cat_slug)
    {


        $category = Category::where('id',$cat_id)->first();
        $posts = Post::where('category_id', $cat_id)->orderBy('id','DESC')->paginate(10);


        if ($cat_id != null) {

            return view('frontend.blog_list', compact('posts','category'));
        } else {
            return view('errors.404');
        }
    }
    public function subCategoryBlogList($sub_cat_id, $sub_cat_slug)
    {


        $category = SubCategory::where('id',$sub_cat_id)->first();

        $posts = Post::where('sub_category_id', $sub_cat_id)->orderBy('id','DESC')->paginate(10);


        if ($sub_cat_id != null) {

            return view('frontend.blog_list', compact('posts','category'));
        } else {
            return view('errors.404');
        }
    }
    public function postDetail($post_slug)
    {
        // dd($post_slug);
        $post = Post::where('slug', $post_slug)->first();
        $allPosts = Post::where('category_id',$post->category_id)->get();
        // dd($allPosts);
        if ($post != null) {

            $sideBarPosts = Post::where(['category_id' => $post->category_id, 'sub_category_id' => $post->sub_category_id])->get();
            $category = SubCategory::where('id', $post->sub_category_id)->first();
            // dd($category);

            return view('frontend.post_detail', compact('post', 'sideBarPosts', 'category','allPosts'));
        } else {
            return view('errors.404');
        }
    }

    public function search(Request $request)
    {
        if ($request->input('query') == null) {
            return back();
        } else {

            $searchTerm = $request->input('query');

            $searchPosts = Post::where('title', 'LIKE', '%' . $searchTerm . '%')->get();
            return view('frontend.search_items', compact('searchPosts'));
        }
    }

    public function websiteInfo($page)
    {
        if ($page == 'about-us' || $page == 'term-and-condition' || $page == 'disclaimer' || $page == 'privacy-policy') {
            $websiteInfo = WebsiteInfo::where('type', $page)->first();

            return view('frontend.website_info', compact('websiteInfo'));
        } else {
            abort(403, 'Unauthorized Access');

            // return back();
        }
    }
    public function contactUs()
    {
        return view('frontend.contact_us');
    }

    public function contactUsStore(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'message'   => 'required',
        ]);

        $data = [
            'name'      =>  $request->name,
            'email'     =>  $request->email,
            'message'   =>  $request->message,
        ];
        ContactUs::insert($data);
        return back()->with(['success' => 'Contact Form Submit Successfully']);
    }
    public function subscribe(Request $request)
    {
        $rules = [
            "email"     => 'required|unique:subscribers',

        ];
        $customMessage = [
            'email.unique' => 'You Already Subscribed',
        ];
        // dd(Str::slug($request->name));
        $this->validate($request, $rules, $customMessage);
        Subscriber::insert(['email' => $request->email]);
        return back()->with('success', 'Thank you for subscribing!');
    }
    public function codeEditor()
    {
        return view('frontend.code_editor');
    }

    public function pythonEditor()
    {
        return view('frontend.python_compiler');
    }

    public function sitemap()
    {
        $posts = Post::all();
        $pages = WebsiteInfo::all();
        // dd($pages);
        return response()->view('frontend.sitemap', [
            'posts' => $posts,
            'pages' => $pages
        ])->header('Content-Type', 'text/xml');
    }

    public function compilePythonCode(Request $request)
    {

        $code = $request->pythonCode;

        // Save the Python code to a temporary file
        $filename = tempnam(sys_get_temp_dir(), 'python_code_');
        file_put_contents($filename, $code);

        // Run the Python interpreter to compile the code
        $process = new Process(["python3", $filename]);
        $process->run();

        // Get the compiled output or error output
        $output = $process->getOutput();
        $errorOutput = $process->getErrorOutput();
        // dd($errorOutput);
        // Check if there is an error

        if (!empty($errorOutput)) {
            // Pass the error output to the view\
            return response()->json($errorOutput);
            // return view('form')->with('error', $errorOutput);
        }

        // If no error, pass the compiled output to the view
        // return view('form')->with('output', $output);
        return response()->json($output);
    }
    public function sendmail()
    {
        $mailData = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp.'
        ];

        FacadesMail::to('cehabhishek@gmail.com')->send(new NewPostMail($mailData));
    }
    public function viewemail()
    {
        return view('frontend.mail');
    }
}
