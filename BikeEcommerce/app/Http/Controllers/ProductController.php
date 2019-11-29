<?php


namespace App\Http\Controllers;

use App\Product;
use App\brand;
use App\Category;
use App\product_image;
use Image;
use File;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('backend.pages.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = brand::all();
        $categories = Category::all();
        return view ('backend.pages.product.create', compact('brands','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->productname;
        $product->desc = $request->productdesc;
        $product->slag = $request->productslag;
        $product->quantity = $request->productquantity;
        $product->price = $request->productprice;
        $product->sku = $request->productsku;
        $product->offerprice = $request->productofferprice;
        $product->status = $request->productstatus;
        $product->save();
        $product->brands()->sync($request->brands);
        $product->categories()->sync($request->categories);
        if($request->hasFile('file')){
            foreach($request->file as $file ){
                $filename=$file->getClientOriginalName();
                $file->storeAs('public/backend/img/product' , $filename);
                $fileModel = new product_image;
                $fileModel->file =$filename;
                $fileModel->product_id = $product->id;
                $fileModel->save();
            }
        }
        return redirect ('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products_image = product_image::all();
        $item = Product::find($id);
        return view('backend.pages.product.show', compact('item','products_image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::with('brands','categories')->where('id',$id)->first();
        $brands = brand::all();
        $categories = Category::all();
        $products_image = product_image::all();
        $item = Product::find($id);
        return view('backend.pages.product.edit', compact('item','products_image','brands','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->productname;
        $product->desc = $request->productdesc;
        $product->slag = $request->productslag;
        $product->quantity = $request->productquantity;
        $product->price = $request->productprice;
        $product->sku = $request->productsku;
        $product->offerprice = $request->productofferprice;
        $product->status = $request->productstatus;
        $product->save();
        $product->brands()->sync($request->brands);
        $product->categories()->sync($request->categories);
        if($request->hasFile('file')){
            foreach($request->file as $file ){
                $filename=$file->getClientOriginalName();
                $file->storeAs('storage/backend/img/product' , $filename);
                $fileModel = new product_image;
                $fileModel->file =$filename;
                $fileModel->product_id = $product->id;
                $fileModel->save();
            }
        }
        return redirect ('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect ('/product');
    }
}
