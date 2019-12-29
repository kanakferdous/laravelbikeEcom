<?php

namespace App\Http\Controllers;

use App\brand;
use Image;
use File;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function __construct()
	{
	    $this->middleware('auth:admin');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = brand::all();
        return view('backend.pages.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.pages.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = new brand;
        $brand->name = $request->brandname;
        $brand->desc = $request->branddesc;
        if($request->hasFile('brandimg')){
            // $brandimg = $request->file('brandimg');
            // $enxtension = $brandimg-> getClientOriginalExtension();
            // $filename = time().'.'.$enxtension;
            // $brandimg-> move('backend/img/photos/'.$filename);
            // $brand->image = $filename;

            $image = $request->file('brandimg');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/backend/img/brand/');
            $image->move($destinationPath, $name);
            $brand->image = $name;
        }
        else {
            return $request;
            $brand->image = '';
        }
        $brand->save();
        return redirect ('brand');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = brand :: find($id);
        return view ('backend.pages.brand.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $brand = brand::find($id);
        $brand->name = $request->brandname;
        $brand->desc = $request->branddesc;
        if($request->hasFile('brandimg')){
            if(File::exists('backend/img/brand/'.$brand->image)){
                File::delete('backend/img/brand/'.$brand->image);
            }
            // $brandimg = $request->file('brandimg');
            // $enxtension = $brandimg-> getClientOriginalExtension();
            // $filename = time().'.'.$enxtension;
            // $brandimg-> move('backend/img/photos/'.$filename);
            // $brand->image = $filename;
            $image = $request->file('brandimg');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/backend/img/brand/');
            $image->move($destinationPath, $name);
            $brand->image = $name;
        }
        else {
            return $request;
            $brand->image = '';
        }
        $brand->save();
        return redirect ('brand');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = brand::find($id);
        if(File::exists('backend/img/brand/'.$brand->image)){
            File::delete('backend/img/brand/'.$brand->image);
        }
        $brand->delete();
        return redirect ('/brand');
    }
}
