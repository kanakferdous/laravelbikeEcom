<?php

namespace App\Http\Controllers\frontend;

use App\Product;
use App\product_image;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function index (){
        $products = Product::all();
        return view('frontend.index', compact('products'));
    }
}
