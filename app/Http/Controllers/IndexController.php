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
use App\Models\WebsiteTitleDescription;
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
        $metaTag = WebsiteTitleDescription::where('page','Index')->first();


        return view('frontend.index', compact('categories', 'sliderPosts','metaTag'));
    }

    public function categoryBlogList($category)
    {

        $category = Category::where('slug', $category)->first();
        $posts = Post::where('category_id', $category->id)->orderBy('id', 'DESC')->get();

        if ($posts != null) {

            return view('frontend.cat_blog_list', compact('posts', 'category'));
        } else {
            return view('errors.404');
        }
    }
    public function subCategoryBlogList($category, $sub_category)
    {

        $subCategory = SubCategory::where('slug', $sub_category)->first();

        // dd($category, $subCategory);


        if ($subCategory != null) {
            $posts = Post::where('sub_category_id', $subCategory->id)->orderBy('id', 'DESC')->get();
            $category = Category::where('id', $subCategory->category_id)->first();

            return view('frontend.sub_cat_blog_list', compact('posts', 'subCategory', 'category'));
        } else {
            return view('errors.404');
        }
    }
    public function postDetail($category, $sub_category = null, $post_slug)
    {
        // dd($post_slug);
        // dd($post_slug);
        $post = Post::where('slug', $post_slug)->first();


        if ($post != null) {
            $allPosts = Post::where('category_id', $post->category_id)->get();
            $category = Category::where('id', $post->category_id)->first();
            $sideBarPosts = Post::where(['category_id' => $post->category_id, 'sub_category_id' => $post->sub_category_id])->get();
            $sub_category = SubCategory::where('id', $post->sub_category_id)->first();
            // dd($category);

            return view('frontend.post_detail', compact('post', 'sideBarPosts', 'allPosts', 'sub_category', 'category'));
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

    public function aboutUs()
    {
        return view('frontend.about-us');
    }
}
