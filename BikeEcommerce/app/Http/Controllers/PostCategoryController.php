<?php

namespace App\Http\Controllers;

use App\postCategory;
use Image;
use File;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = postCategory::all();
        return view('backend.pages.blog.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.pages.blog.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new postCategory;
        $category->name = $request->postcategoryname;
        $category->desc = $request->postcategorydesc;
        if($request->hasFile('postcategoryimg')){
            $image = $request->file('postcategoryimg');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/backend/img/postcategory/');
            $image->move($destinationPath, $name);
            $category->image = $name;
        }
        else {
            return $request;
            $category->image = '';
        }
        $category->parentsID = $request->postcatparentsid ? $request->postcatparentsid : NULL;
        $category->save();
        return redirect ('postcategory');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\postCategory  $postCategory
     * @return \Illuminate\Http\Response
     */
    public function show(postCategory $postCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\postCategory  $postCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = postCategory :: find($id);
        return view ('backend.pages.blog.category.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\postCategory  $postCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = postCategory::find($id);
        $category->name = $request->postcategoryname;
        $category->desc = $request->postcategorydesc;
        if($request->hasFile('postcategoryimg')){
            if(File::exists('backend/img/postcategory/'.$category->image)){
                File::delete('backend/img/postcategory/'.$category->image);
            }
            $image = $request->file('postcategoryimg');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/backend/img/postcategory/');
            $image->move($destinationPath, $name);
            $category->image = $name;
        }
        else {
            return $request;
            $category->image = '';
        }
        $category->parentsID = $request->postcatparentsid ? $request->postcatparentsid : NULL;
        $category->save();
        return redirect ('postcategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\postCategory  $postCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = postCategory::find($id);
        if(File::exists('backend/img/postcategory/'.$category->image)){
            File::delete('backend/img/postcategory/'.$category->image);
        }
        $category->delete();
        return redirect ('/postcategory');
    }
}
