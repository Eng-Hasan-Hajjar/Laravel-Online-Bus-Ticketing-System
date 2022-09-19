<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operator;
use App\Buses;
use Session;
use DB;
class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operators = Operator::get();
        $buses = Buses::get();
        return view('admin.buses.bus-list', compact('operators', 'buses'));
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
        $this->bus_validation($request);
        $bus_name = $request->get('bus_name');
        $bus_code = $request->get('bus_code');
        $total_seats = $request->get('total_seats');
        $operator_id = $request->get('operator_id');
        // $status = $request->get('status');
            
        $insertBus = [
            'bus_name' => $bus_name,
            'bus_code' => $bus_code,
            'total_seats' => $total_seats,
            'operator_id' => $operator_id,
            // 'status' => $status,
            'created_at' => \Carbon\carbon::now(),
            'updated_at' => \Carbon\carbon::now(),
        ];
        // dd($insertBus); // we will check okay if we are having all the data okay
        DB::table('buses')->insert( $insertBus);
        Session::flash('msg', 'Bus Register Successfully!');
        return redirect()->back();

        return view('admin.buses.bus-list');
    }

    public function bus_validation(){
        $rules = [  // this array okay to validate our buses input before insertation to our database
            'bus_name' => 'required',
            'bus_code' => 'required',
            'total_seats' => 'required',
            'opeartor_id' => 'required',
        ];

    }
    // we can use anther validation if we want but i will show you how to work on that also okay
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
