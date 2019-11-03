<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use Image;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id','desc')->get();
        return view('backend.pages.product.index')->with('products',$products);
    }
    public function create()
    {
        return view('backend.pages.product.create');
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('backend.pages.product.edit')->with('product',$product);
    }
    // public function delete($id)
    // {
    //     $product = Product::find($id);
    //     if(!is_null($product)){
    //         $product->delete();
    //     }
    //     Session()->flash('success','Product has deleted Successfully !!');
    //     return back();
    // }
    public function store(Request $request)
    {
        $request->validate([
            'title'         => 'required|max:150',
            'description'   => 'required',
            'price'         => 'required |numeric',
            'quantity'      => 'required |numeric',
        ]);

        $product = new Product;
        $product->title       = $request->title;
        $product->description = $request->description;
        $product->price       = $request->price;
        $product->quantity    = $request->quantity;

        $product->slug        = str_slug($request->title);
        $product->catagory_id = 1;
        $product->brand_id    = 1;
        $product->admin_id    = 1;
        $product->save();

        //ProductImage model image insert
        // if ($request->hasFile('product_image')) {
        //     //insert that image in file/folder location

        //     $image = $request->file('product_image');
        //     $img   = time(). '.' .$image->getClientOriginalExtension();
        //     $location = public_path('images/products/' .$img);
        //     Image::make($image)->save($location);

        //     //insert that image into database with model
        //     $product_image = new ProductImage;
        //     $product_image->Product_id = $product->id;
        //     $product_image->image      = $img;
        //     $product_image->save();
        // }

        if(count($request->product_image) > 0)
        {
            foreach ($request->product_image as $image) {

                //insert that image in file/folder location
                //$image = $request->file('product_image');

                $img = time(). '.' .$image->getClientOriginalExtension();
                $location = public_path('images/products/' .$img);
                Image::make($image)->save($location);

                //insert that image into database with model
                $product_image = new ProductImage();
                $product_image->Product_id = $product->id;
                $product_image->image      = $img;
                $product_image->save();
            }
        }
        return redirect()->route('admin.product.create');
    }
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'title'         => 'required|max:150',
            'description'   => 'required',
            'price'         => 'required |numeric',
            'quantity'      => 'required |numeric',
        ]);

        $product = Product::find($id);

        $product->title       = $request->title;
        $product->description = $request->description;
        $product->price       = $request->price;
        $product->quantity    = $request->quantity;

        $product->save();

        return redirect()->route('admin.products');
    }
    public function delete($id)
    {
        $product = Product::find($id);
        if(!is_null($product)){
            $product->delete();
        }
        Session()->flash('success','Product has deleted Successfully !!');
        return back();
        // return view('admin.pages.product.edit')->with('product',$product);
    }
}