<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class AjaxController extends Controller
{
    public function getSubCategory(Request $request)
    {
        $subCategories = SubCategory::where('category_id', $request->category_id)->get();
        return response()->json(['sub_categoreis' => $subCategories]);
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpeg,png,jpg,svg|max:512',
        ]);
        $slug = Str::slug($request->name);
        $imageName = $slug .time(). '.' . $request->image->extension();


        if (file_exists(public_path('uploads/post/' . $imageName))) {

            return response()->json(['message' => 'image already exist','status' => 409]);
        } else {

            $request->image->move(public_path('uploads/post'), $imageName);
            $imageUrl = $request->getSchemeAndHttpHost() . '/uploads/post/' . $imageName;

            return response()->json(['message' => 'Image Uplaod Successfuly','image' => $imageUrl,'status' => 200,'imageName' => $slug .time()]);
        }
    }
}
