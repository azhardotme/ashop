<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class ProductContoller extends Controller
{
    public function index()
    {
        $products = Product::all();
        $category = Category::all();
        return view('backend.product.index',compact('products','category'));
    }

    public function create(Request $request)
    {
        $category = Category::all();
        return view('backend.product.create',compact('category'));
    }

    public function insert(Request $request)
    {
        $validatedData = $request->validate([
            'image' => ['required'],
            'cate_id' => ['required'],
            'name' => ['required'],
            'slug' => ['required'],
            'description' => ['required'],
            'small_description' => ['required'],
            'original_price' => ['required'],
            'selling_price' => ['required'],
            'tax' => ['required'],
            'qty' => ['required'],
            'status' => ['required'],
            'trending' => ['required'],
            'meta_title' => ['required'],
            'meta_keywords' => ['required'],
            'meta_description' => ['required'],
        ]);

        $product = new Product();
            if($request->hasFile('image'))
            {
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
                $file->move('assets/uploads/products/',$filename);
                $product->image = $filename;
            }
            $product->cate_id = $request->input('cate_id');
            $product->name = $request->input('name');
            $product->slug = $request->input('slug');
            $product->small_description = $request->input('small_description');
            $product->description = $request->input('description');
            $product->original_price = $request->input('original_price');
            $product->selling_price = $request->input('selling_price');
            $product->tax = $request->input('tax');
            $product->qty = $request->input('qty');
            $product->status = $request->input('status') == TRUE ? '1':'0';
            $product->trending = $request->input('trending') == TRUE ? '1' :'0';
            $product->meta_title = $request->input('meta_title');
            $product->meta_keywords = $request->input('meta_keywords');
            $product->meta_description = $request->input('meta_description');
            $product->save();
            return redirect('/all-product')->with('status','Product created Successfully!');
    }


    public function editCategory($id)
    {
        $category = Category::find($id);
        return view('backend.category.edit_category',compact('category'));
    }

}
