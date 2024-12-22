<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
use App\Models\ContactUs;
use App\Models\Post;
use App\Models\SubCategory;
use App\Models\Subscriber;
use App\Models\WebsiteInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function loginFrom()
    {
        return view('admin.login');
    }
    public function login(Request $request)
    {
        $rules = [
            "email"     => 'required',
            "password"  => 'required',

        ];

        $this->validate($request, $rules);
        $adminEmail = Admin::where('email', $request->email)->first();
        if ($adminEmail != null) {
            if (Hash::check($request->password, $adminEmail->password)) {

                session()->put('adminEmail', $request->email);

                return redirect()->route('admin.dashboard');
            }
            return back()->with('error', 'Invalid Credentials');
        } else {
            return back()->with('error', 'Credentials Not Match');
        }
    }

    public function dashboard()
    {
        $posts = Post::all();
        $categories = Category::all();
        $subCategories = SubCategory::all();
        $subscribers = Subscriber::all();
        $contactUsMessages = ContactUs::all();
        return view('admin.dashboard', compact(
            'posts',
            'categories',
            'subCategories',
            'subscribers',
            'contactUsMessages'
        ));
    }

    public function websiteInfoFrom($page)
    {
        // dd($page);
        if ($page == 'about-us' || $page == 'term-and-condition' || $page == 'disclaimer' || $page == 'privacy-policy') {
            $websiteInfo = WebsiteInfo::where('type', $page)->first();

            return view('admin.websiteinfo.website_info', compact('websiteInfo'));
        } else {
            abort(403, 'Unauthorized Access');

            // return back();
        }
    }
    public function updateWebsiteInfo(Request $request, $page)
    {

        // dd($request->all(),$page);
        if ($page == 'about-us' || $page == 'term-and-condition' || $page == 'disclaimer' || $page == 'privacy-policy') {
            WebsiteInfo::where('type', $page)->update(['description' => $request->websitedata]);
            return back()->with('success', 'Website Info Updated');
        } else {
            abort(403, 'Unauthorized Access');

            // return back();
        }
    }
    public function contactUs()
    {
        $contactUsMessages = ContactUs::orderBy('id', 'DESC')->get();
        return view('admin.websiteinfo.contact_us', compact('contactUsMessages'));
    }
    public function deleteContactUs($id)
    {
        ContactUs::where('id', $id)->delete();
        return back()->with('success', 'ContactUs is deleted successfully');
    }

    public function subscribers()
    {
        $subscribers = Subscriber::all();
        return view('admin.subscribers', compact('subscribers'));
    }
    public function subscriberDelete($id){
        Subscriber::where('id', $id)->delete();
        return back()->with('success','Subscriber deleted successfully');
    }
}
