<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operator;
class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operators = Operator::get();
        return view('admin.operators.operator-list', compact('operators'));
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
        // we are validating our inputs okay to avoid having error when inserting okay.
        $this->validate($request,[
            'operator_name' => 'required',
             'operator_email' => 'required',
             'operator_address' => 'required',
             'operator_phone' => 'required',
             'operator_logo' => 'image|max:2048',
        ]);

            $image =  $request->file('operator_logo');

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('operator_images'), $image_name);

            $operators = new Operator;
            $operators->operator_name = $request->operator_name;
            $operators->operator_email = $request->operator_email;
            $operators->operator_address = $request->operator_address;
            $operators->operator_phone = $request->operator_phone;
            $operators->operator_logo = $image_name;

                // dd($operators);
            $operators->save(); // THIS SAVE FUNCTION WILL SAVE THE DATA OKAY

            return redirect()->back()->with('flash_message_success', 'Operator Added Succssfully!');
// WE NEED TO GENERATE THIS CUSTOM FLASH MESSAGE OKAY. SO LET'S ADD THAT FIRST BEFORE INSERTING OKAY.
            $id = $request::get('operator_id');
            $operators = Operator::where('operator_id', $id);

            return view('admin.operators.operator-list', compact('operators'));
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
