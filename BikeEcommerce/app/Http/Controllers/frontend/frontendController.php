<?php

namespace App\Http\Controllers\frontend;

use App\Product;
use App\product_image;
use App\slider;
use App\Social;
use Darryldecode\Cart\Facades\CartFacade;
use Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function index (){
        $products = Product::where('status', 1)->paginate(15);
        $sliders = slider::all();
        $socials = Social::all();
        return view('frontend.index', compact('sliders', 'products', 'socials'));
    }
}
