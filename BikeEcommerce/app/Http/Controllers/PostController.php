<?php

namespace App\Http\Controllers;

use App\post;
use App\tag;
use App\postCategory;
use Image;
use File;
use Illuminate\Http\Request;

class PostController extends Controller
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
        $posts = post::all();
        return view('backend.pages.blog.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = tag::all();
        $categories = postCategory::all();
        return view ('backend.pages.blog.post.create', compact('tags','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new post;
        $post->title = $request->posttitle;
        $post->subtitle = $request->postsubtitle;
        $post->desc = $request->postcontent;
        $post->slag = $request->postslag;
        $post->status = $request->poststatus ? $request->poststatus : 0;
        if($request->hasFile('postftimg')){
            $image = $request->file('postftimg');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/backend/img/post/');
            $image->move($destinationPath, $name);
            $post->image = $name;
        }
        else {
            return $request;
            $post->image = '';
        }
        $post->save();
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);
        return redirect ('post');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        $posts = post::with('tags','categories')->where('id',$id)->first();
        $tags = tag::all();
        $categories = postCategory::all();
        $item = post::find($id);
        return view('backend.pages.blog.post.edit', compact('item','tags','posts','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = post::find($id);
        $post->title = $request->posttitle;
        $post->subtitle = $request->postsubtitle;
        $post->desc = $request->postcontent;
        $post->slag = $request->postslag;
        $post->status = $request->poststatus ? $request->poststatus : 0;
        if($request->hasFile('postftimg')){
            $image = $request->file('postftimg');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/backend/img/post/');
            $image->move($destinationPath, $name);
            $post->image = $name;
        }
        else {
            return $request;
            $post->image = '';
        }
        $post->save();
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);
        return redirect ('post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = post::find($id);
        $post->delete();
        return redirect ('/post');
    }
}
