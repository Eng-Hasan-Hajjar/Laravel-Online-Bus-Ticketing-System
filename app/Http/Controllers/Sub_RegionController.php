<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sub_Region;
use App\Region;
use DB;
use Session;
class Sub_RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_region = Sub_Region::get();
        $region = Region::get();
        // let's work on the relation in the next part of the video okay.
        // because the time is already finish 
        // thank you so much for watching okay.
        return view('admin.sub_regions.sub-region-list',
        compact('sub_region','region'));
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
        //just to make our work easy for us okay.
        // just try and focus to the code and know tips okay.
     // so here we will call the validation function okay
     $this->sub_region_validation($request);
     $sub_region_name = $request->get('sub_region_name');
     $sub_region_code = $request->get('sub_region_code');
     $region_id = $request->get('region_id');
     // $status = $request->get('status');
         
     $insertSubRegion = [
         'sub_region_name' => $sub_region_name,
         'sub_region_code' => $sub_region_code,
         'region_id' => $region_id,
         // 'status' => $status,
         'created_at' => \Carbon\carbon::now(),
         'updated_at' => \Carbon\carbon::now(),
     ];
    //  dd($insertSubRegion); // we will check okay if we are having all the data okay
     DB::table('sub_regions')->insert( $insertSubRegion);
     Session::flash('msg', 'Sub Region Register Successfully!');
     return redirect()->back();

     return view('admin.sub_regions.sub-region-list');
 }

 public function sub_region_validation(){
     $rules = [  // this array okay to validate our buses input before insertation to our database
         'region_id' => 'required',
         'sub_region_name' => 'required',
         'sub_region_code' => 'required',
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
