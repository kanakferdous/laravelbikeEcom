<?php

namespace App\Http\Controllers\frontend;

use App\Product;
use App\brand;
use App\Category;
use App\product_image;
use Image;
use File;
use Darryldecode\Cart\Facades\CartFacade;
use Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class featproController extends Controller
{
    public function index (){
        $products_image = product_image::all();
        $products = Product:: where('featured',1)->get();
        return view ('frontend.index', compact('products','products_image'));
    }
}
