<?php

namespace App\Http\Controllers\frontend;

use App\Product;
use App\Category;
use App\brand;
use Darryldecode\Cart\Facades\CartFacade;
use Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class shopController extends Controller
{
    public function index(){
        $products = Product::where('status', 1)->paginate(15);
        $categories = Category::all();
        $brands = brand::all();
        return view('frontend.pages.shop',compact('products','categories','brands'));
    }
    public function category(Category $category){
        $categories = Category::all();
        $brands = brand::all();
        $products = $category -> products();
        return view ('frontend.pages.shop', compact('products','categories', 'brands'));
    }
    public function brand(brand $brand){
        $categories = Category::all();
        $brands = brand::all();
        $products = $brand -> products();
        return view ('frontend.pages.shop', compact('products','categories', 'brands'));
    }
}
