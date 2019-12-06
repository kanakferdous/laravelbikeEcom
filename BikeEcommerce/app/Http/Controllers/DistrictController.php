<?php

namespace App\Http\Controllers;

use App\Division;
use App\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $districts = District::all();
        $divisions = Division::all();
        return view('backend.pages.settings.district.index',compact('districts','divisions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $districts = District::all();
        $divisions = Division::all();
        return view ('backend.pages.settings.district.create', compact('districts','divisions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $district = new District;
        $district->name = $request->districtname;
        $district->division_id = $request->divisionid;
        $district->save();
        return redirect ('district');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\District  $district
     * @return \Illuminate\Http\Response
     */
    public function show(District $district)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\District  $district
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $divisions = Division::all();
        $item = District :: find($id);
        return view ('backend.pages.settings.district.edit', compact('item','divisions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\District  $district
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $district = District::find($id);
        $district->name = $request->districtname;
        $district->division_id = $request->divisionid;
        $district->save();
        return redirect ('district');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\District  $district
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $district = District::find($id);
        $district->delete();
        return redirect ('/district');
    }
}
