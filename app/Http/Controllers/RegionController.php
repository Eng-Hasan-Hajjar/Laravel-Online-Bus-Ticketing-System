<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use DB;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $region = Region::get();

        return view('admin.regions.region-list', compact('region'));
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
         // so here we will call the validation function okay
         $this->region_validation($request);
         $region_name = $request->get('region_name');
         $region_code = $request->get('region_code');
         // $status = $request->get('status');
             
         $insertRegion = [
             'region_name' => $region_name,
             'region_code' => $region_code,
             // 'status' => $status,
             'created_at' => \Carbon\carbon::now(),
             'updated_at' => \Carbon\carbon::now(),
         ];
        //  dd($insertRegion); // we will check okay if we are having all the data okay
         DB::table('regions')->insert( $insertRegion);
         Session::flash('msg', 'Region Register Successfully!');
         return redirect()->back();
 
         return view('admin.regions.region-list');
     }
 
     public function region_validation(){
         $rules = [  // this array okay to validate our buses input before insertation to our database
             'region_name' => 'required',
             'region_code' => 'required',
         ];
 
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
