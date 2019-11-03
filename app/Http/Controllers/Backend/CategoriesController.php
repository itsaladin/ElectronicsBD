<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use Image;

class CategoriesController extends Controller
{
    // public function catagory(){
    //     return view('pages.index');
    // }
    public function index()
    {
        $categories = Category::orderBy('id','desc')->get();
        return view('backend.pages.category.index',compact('categories'));
    }
    public function create()
    {
        $main_categories = Category::orderBy('name','desc')->where('parent_id',null)->get();
        return view('backend.pages.category.create',compact('main_categories'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'         => 'required',
            'image'        => 'nullable|image',
        ],
        [
            'name.required' => 'Please provide a category name',
            'name.image'    => 'Please provide a valide image with .jpg, .png, .gif, .jpeg extention',
        ]);

        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->parent_id = $request->parent_id;
        $category->save();

        if( count($request->image) > 0)
        {
            //insert that image in file/folder location
            $image = $request->file('image');
            $img = time(). '.' .$image->getClientOriginalExtension();
            $location = public_path('images/categoriec/' .$img);
            Image::make($image)->save($location);
            $category->image = $img;
        }
        
        session()->flash('success','A new category has added successfully');
        return redirect()->route('admin.categories');
    }
}