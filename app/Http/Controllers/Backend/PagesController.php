<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use Image;

class PagesController extends Controller
{
    public function index()
    {
        return view('backend.pages.index');
    }
}
