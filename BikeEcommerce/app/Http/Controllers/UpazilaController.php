<?php

namespace App\Http\Controllers;

use App\Upazila;
use Illuminate\Http\Request;

class UpazilaController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Upazila  $upazila
     * @return \Illuminate\Http\Response
     */
    public function show(Upazila $upazila)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Upazila  $upazila
     * @return \Illuminate\Http\Response
     */
    public function edit(Upazila $upazila)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Upazila  $upazila
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Upazila $upazila)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Upazila  $upazila
     * @return \Illuminate\Http\Response
     */
    public function destroy(Upazila $upazila)
    {
        //
    }
}
