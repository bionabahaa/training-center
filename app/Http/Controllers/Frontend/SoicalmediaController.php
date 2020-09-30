<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\soicalmedia;

class SoicalmediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soicalmedia_data = soicalmedia::findOrfail(1);

        return view('frontend.pages.soicalmedia.index' ,compact('soicalmedia_data'));
    }


    public function update(Request $request)
    {
        $facebook       = $request->facebook;
        $twitter        = $request->twitter;
        $instagram      = $request->instagram;
        $youtube        = $request->youtube;
        $gmail	        = $request->gmail;





        $soicalmedia = soicalmedia::findOrfail(1);


        $soicalmedia->facebook    = $facebook;
        $soicalmedia->twitter     = $twitter;
        $soicalmedia->instagram   = $instagram;
        $soicalmedia->youtube     = $youtube;
        $soicalmedia->gmail       = $gmail;



        $soicalmedia->save();

        return back();
    }


}
