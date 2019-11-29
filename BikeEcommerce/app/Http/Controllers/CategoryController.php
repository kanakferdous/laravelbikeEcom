<?php

namespace App\Http\Controllers;

use App\Category;
use Image;
use File;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('backend.pages.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.pages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->categoryname;
        $category->desc = $request->categorydesc;
        if($request->hasFile('categoryimg')){
            // $categoryimg = $request->file('categoryimg');
            // $enxtension = $categoryimg-> getClientOriginalExtension();
            // $filename = time().'.'.$enxtension;
            // $categoryimg-> move('backend/img/photos/'.$filename);
            // $category->image = $filename;

            $image = $request->file('categoryimg');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/backend/img/category/');
            $image->move($destinationPath, $name);
            $category->image = $name;
        }
        else {
            return $request;
            $category->image = '';
        }
        $category->parentsID = $request->parentsid;
        $category->save();
        return redirect ('category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Category :: find($id);
        return view ('backend.pages.category.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->categoryname;
        $category->desc = $request->categorydesc;
        if($request->hasFile('categoryimg')){
            if(File::exists('backend/img/category/'.$category->image)){
                File::delete('backend/img/category/'.$category->image);
            }
            // $categoryimg = $request->file('categoryimg');
            // $enxtension = $categoryimg-> getClientOriginalExtension();
            // $filename = time().'.'.$enxtension;
            // $categoryimg-> move('backend/img/photos/'.$filename);
            // $category->image = $filename;

            $image = $request->file('categoryimg');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/backend/img/category/');
            $image->move($destinationPath, $name);
            $category->image = $name;
        }
        else {
            return $request;
            $category->image = '';
        }
        $category->parentsID = $request->parentsid;
        $category->save();
        return redirect ('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if(File::exists('backend/img/category/'.$category->image)){
            File::delete('backend/img/category/'.$category->image);
        }
        $category->delete();
        return redirect ('/category');
    }
}
