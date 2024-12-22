<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    public function catSubCatIndex()
    {
        $categories = Category::all();
        $subCategories = SubCategory::all();
        return view('admin.category.index', compact('categories', 'subCategories'));
    }

    public function categoryCreate()
    {
        $categories = Category::all();
        return view('admin.category.create_category', compact('categories'));
    }
    public function categoryStore(Request $request)
    {
        $rules = [
            "name"        => 'required|unique:categories',
        ];

        $this->validate($request, $rules);

        $categoryData = [
            "name"  => $request->name
        ];
        Category::insert($categoryData);
        return back()->with('success', 'Category created successfully');
    }

    public function subCategoryStore(Request $request)
    {
        $rules = [
            "category_id"           => 'required',
            "name"                  => 'required|unique:sub_categories',
            "short_description"     => 'required',
            // "image"                 => 'required|image|mimes:jpeg,jpg,png|max:512',

        ];

        // dd(Str::slug($request->name));
        $this->validate($request, $rules);


        // $image = Image::make($request->file('image'));

        // $imageExtension  = strtolower(trim($request->file('image')->getclientoriginalextension()));
        // $imageName = Str::slug($request->name) . '.' . $imageExtension;

        // $destinationPathThumbnail = public_path('/uploads/sub_category/');
        // $image->resize(430, 168);

        if ($request->has('show_in_menu')) {
            $subCategoryData = [

                "category_id"           => $request->category_id,
                "name"                  => $request->name,
                "short_description"     => $request->short_description,
                "show_in_menu"          => $request->show_in_menu,
                // "image"                 => $imageName,
            ];
        } else {
            $subCategoryData = [

                "category_id"           => $request->category_id,
                "name"                  => $request->name,
                "short_description"     => $request->short_description,
                // "image"                 => $imageName,
            ];
        }


        SubCategory::insert($subCategoryData);
        // $image->save($destinationPathThumbnail . $imageName);
        // $image->move(public_path('/uploads/sub_category'), $imageName);
        return back()->with('success', 'Sub Category created successfully');
    }
    public function updateCategory(Request $request, $id)
    {
        $rules = [
            "name"        => 'required|unique:categories',
        ];

        $this->validate($request, $rules);

        $categoryData = [
            "name"  => $request->name
        ];
        Category::where('id', $id)->update($categoryData);
        return back()->with('success', 'Category created successfully');
    }

    public function subCategoryUpdate(Request $request, $id)
    {
        // dd($id);
        $rules = [
            "category_id"           => 'required',
            "name"                  => 'required|unique:sub_categories,name,' . $id,
            "short_description"     => 'required',
            // "image"                 => 'nullable|image|mimes:jpeg,jpg,png|max:512',

        ];

        // dd(Str::slug($request->name));
        $this->validate($request, $rules);

        // if ($request->file('image') != null) {
        //     $subCategory = SubCategory::where('id', $id)->first();

        //     $image = Image::make($request->file('image'));

        //     $imageExtension  = strtolower(trim($request->file('image')->getclientoriginalextension()));
        //     $imageName = Str::slug($request->name) . time().'.' . $imageExtension;

        //     $destinationPathThumbnail = public_path('/uploads/sub_category/');
        //     $image->resize(430, 168);
        //     unlink(public_path('/uploads/sub_category/' . $subCategory->image));
        //     $image->save($destinationPathThumbnail . $imageName);

        //     $subCategoryData = [

        //         "category_id"           => $request->category_id,
        //         "name"                  => $request->name,
        //         "short_description"     => $request->short_description,
        //         "image"                 => $imageName,
        //     ];
        // } else {
        //     $subCategoryData = [

        //         "category_id"           => $request->category_id,
        //         "name"                  => $request->name,
        //         "short_description"     => $request->short_description,
        //     ];
        // }
        $subCategoryData = [

            "category_id"           => $request->category_id,
            "name"                  => $request->name,
            "short_description"     => $request->short_description,
        ];
        SubCategory::where('id',$id)->update($subCategoryData);
        return back()->with('success','Sub Category updated successfully');
        // dd($request->all(), $id);
    }

    public function catDelete($id){
        Category::where('id',$id)->delete();
        return back()->with('success','Category deleted successfully');
    }
    public function subCatDelete($id){
        
        SubCategory::where('id',$id)->delete();
        
        return back()->with('success','Category deleted successfully');
    }
}
