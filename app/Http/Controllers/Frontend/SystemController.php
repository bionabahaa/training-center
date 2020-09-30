<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\System;

class SystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $system_data = System::findOrfail(1);

        return view('frontend.pages.systems.index' ,compact('system_data'));
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
    public function update(Request $request)
    {
        $en_title                  = $request->en_title;
        $ar_title                  = $request->ar_title;
        $en_descriptions           = $request->en_descriptions;
        $ar_descriptions           = $request->ar_descriptions;
        $en_footer	               = $request->en_footer;
        $ar_footer                 = $request->ar_footer;
        $en_address                = $request->en_address;
        $ar_address               = $request->ar__address;
        $ar_phone_number           = $request->ar_phone_number;
        $en_phone_number           = $request->en_phone_number;


        $system_data = System::findOrfail(1);
        $system_data->en_title = $en_title;
        $system_data->ar_title = $ar_title;
        $system_data->en_descriptions = $en_descriptions;
        $system_data->ar_descriptions = $ar_descriptions;
        $system_data->en_footer = $en_footer;
        $system_data->ar_footer = $ar_footer;
        $system_data->ar_phone_number = $ar_phone_number;
        $system_data->en_phone_number = $en_phone_number;


        if($request->hasFile('image')){
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('/frontend/website_images/systems/'), $imageName);
            $image = $imageName;
            $system_data->image = $image;

        }

             $system_data->save();
                return back();
    }


}
