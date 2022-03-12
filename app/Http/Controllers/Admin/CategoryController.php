<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use Session;
class CategoryController extends Controller
{
    public function allCategory()
    {
        $category = Category::paginate(5);
        return view('backend.category.all_category',compact('category'));
    }

    public function addCategory()
    {
        return view('backend.category.add_category');
    }

    public function insertCategory(Request $request)
    {
        $category = new Category();
            if($request->hasFile('image'))
            {
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
                $file->move('assets/uploads/category/',$filename);
                $category->image = $filename;
            }
            $category->name = $request->input('name');
            $category->slug = $request->input('slug');
            $category->description = $request->input('description');
            $category->status = $request->input('status') == TRUE ? '1':'0';
            $category->popular = $request->input('popular') == TRUE ? '1' :'0';
            $category->meta_title = $request->input('meta_title');
            $category->meta_keywords = $request->input('meta_keywords');
            $category->meta_description = $request->input('meta_description');
            $category->save();
            return redirect('/all-category')->with('status','Category created Successfully!');
    }
}
