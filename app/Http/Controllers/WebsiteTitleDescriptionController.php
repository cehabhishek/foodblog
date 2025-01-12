<?php

namespace App\Http\Controllers;

use App\Models\WebsiteTitleDescription;
use Illuminate\Http\Request;

class WebsiteTitleDescriptionController extends Controller
{
    public function titleDescriptionIndex()
    {
        $datas = WebsiteTitleDescription::all();
        return view('admin.websiteinfo.index_title_description', compact('datas'));
    }
    public function titleDescriptionEdit($id)
    {
        $data = WebsiteTitleDescription::where('id', $id)->first();
        return view('admin.websiteinfo.edit_title_description', compact('data'));
    }

    public function titleDescriptionUpdate(Request $request, $id)
    {
        $rules = [
            "title"                 => 'required',
            "keywords"              => 'required',
            "meta_description"      => 'required',

        ];

        $this->validate($request, $rules);
        $data = [
            "title"             => $request->title,
            "keywords"          => implode(',',$request->keywords),
            "meta_description"  => $request->meta_description,
        ];
        WebsiteTitleDescription::where('id',$id)->update($data);
        return back()->with('success','Data Updated');
    }
}
