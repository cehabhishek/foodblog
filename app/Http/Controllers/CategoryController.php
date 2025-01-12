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
            "name"              => 'required|unique:categories',
            "title"             => 'required',
            "keywords"          => 'required',
            "meta_description"  => 'required',
        ];

        $this->validate($request, $rules);
        $name = str_replace('&', 'and', $request->name);
        $categoryData = [
            "name"              => $request->name,
            "title"             => $request->title,
            "slug"              => Str::slug($name),
            "keywords"          => implode(',', $request->keywords),
            "meta_description"  => $request->meta_description,
        ];
        Category::insert($categoryData);
        return back()->with('success', 'Category created successfully');
    }

    public function subCategoryStore(Request $request)
    {
        $rules = [
            "category_id"       => 'required',
            "name"              => 'required|unique:sub_categories',
            "title"             => 'required',
            "keywords"          => 'required',
            "meta_description"  => 'required',

        ];
        // dd($request->all());

        // dd(Str::slug($request->name));
        $this->validate($request, $rules);
        $name = str_replace('&', 'and', $request->name);

        $subCategoryData = [
            "category_id"           => $request->category_id,
            "name"                  => $request->name,
            "slug"                  => Str::slug($name),
            "title"                 => $request->title,
            "keywords"              => implode(',', $request->keywords),
            "meta_description"      => $request->meta_description,
        ];


        SubCategory::insert($subCategoryData);
        // $image->save($destinationPathThumbnail . $imageName);
        // $image->move(public_path('/uploads/sub_category'), $imageName);
        return back()->with('success', 'Sub Category created successfully');
    }

    public function editCategory($id){
        $category = Category::where('id', $id)->first();
        return view('admin.category.edit_category',compact('category'));
    }




    public function updateCategory(Request $request, $id)
    {
        // dd($request->all());
        $rules = [
            "name"                  => 'required|unique:categories,name,' . $id,
            "title"                 => 'required',
            "keywords"              => 'required',
            "meta_description"      => 'required',
        ];

        $this->validate($request, $rules);
        $name = str_replace('&', 'and', $request->name);
        $categoryData = [
            "name"              => $request->name,
            "title"             => $request->title,
            "slug"              => Str::slug($name),
            "keywords"          => implode(',', $request->keywords),
            "meta_description"  => $request->meta_description,
        ];
        Category::where('id', $id)->update($categoryData);
        return back()->with('success', 'Category created successfully');
    }

    public function editSubCategory($id){
        $subCategory = SubCategory::where('id', $id)->first();
        $category = Category::all();
        return view('admin.category.edit_sub_category',compact('subCategory','category'));
    }
    public function subCategoryUpdate(Request $request, $id)
    {
        // dd($request->all());
        $rules = [
            "category_id"           => 'required',
            "name"                  => 'required|unique:sub_categories,name,' . $id,
            "title"                 => 'required',
            "keywords"              => 'required',
            "meta_description"      => 'required',

        ];

        $this->validate($request, $rules);

        $name = str_replace('&', 'and', $request->name);

        $subCategoryData = [
            "category_id"           => $request->category_id,
            "slug"                  => Str::slug($name),
            "name"                  => $request->name,
            "title"                 => $request->title,
            "keywords"              => implode(',', $request->keywords),
            "meta_description"      => $request->meta_description,
        ];
        SubCategory::where('id', $id)->update($subCategoryData);
        return back()->with('success', 'Sub Category updated successfully');
        // dd($request->all(), $id);
    }

    public function catDelete($id)
    {
        Category::where('id', $id)->delete();
        return back()->with('success', 'Category deleted successfully');
    }
    public function subCatDelete($id)
    {

        SubCategory::where('id', $id)->delete();

        return back()->with('success', 'Category deleted successfully');
    }


}
