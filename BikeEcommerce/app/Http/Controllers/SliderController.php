<?php

namespace App\Http\Controllers;

use App\slider;
use Image;
use File;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = slider::all();
        return view('backend.pages.settings.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.pages.settings.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = new slider;
        $slider->title = $request->slidertitle;
        $slider->desc = $request->sliderdesc;
        if($request->hasFile('image')){
            // $brandimg = $request->file('brandimg');
            // $enxtension = $brandimg-> getClientOriginalExtension();
            // $filename = time().'.'.$enxtension;
            // $brandimg-> move('backend/img/photos/'.$filename);
            // $brand->image = $filename;
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/backend/img/slider/');
            $image->move($destinationPath, $name);
            $slider->image = $name;
        }
        else {
            return $request;
            $slider->image = '';
        }
        $slider->save();
        return redirect ('slider');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(slider $slider)
    {
        //
    }
}
