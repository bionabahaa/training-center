<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\instructor;
use Illuminate\Http\Request;

use App\Models\Aboutus;
use App\Models\System;
use App\Models\Slider;
use App\Models\course;
use App\Models\Categories;
Use App\Models\Client;
use App\Models\Events;

use App\Models\Blog;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lang = \Lang::getLocale();

        $data['Slider']      = Slider::select($lang.'_title as title',$lang.'_description as description','id as id','image as image')->orderBy('id', 'asc')->get();
        $data['Categories']  = Categories::select($lang.'_title as title',$lang.'_name as name','id as id','image as image')->orderBy('id', 'asc')->get();

        $data['course']      = course::select($lang.'_topic as topic',$lang.'_description as description',
            'course_level','start_date','end_date','price','course_hours','location','category_id','instructor_id','id','image')->orderBy('id', 'asc')->get();

        $data['Events']        = Events::select($lang.'_description as description',$lang.'_address as address','image','email','date','time','phone','status','id')->orderBy('id', 'asc')->get();

        $data['Blog']          = Blog::select($lang.'_name as name',$lang.'_description as description','image','date','id')->orderBy('id', 'asc')->orderBy('id', 'asc')->get();

        $data['instructor']    = instructor::select($lang.'_fname as fname',$lang.'_lname as lname','image',
            'address','phone','email','birthday','avilable_time','shortbio','salary','id')->orderBy('id', 'asc')->orderBy('id', 'asc')->get();

        $data['Client']        =  Client::orderBy('id', 'asc')->get();


        return view('frontend.pages.index',compact('data'));
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
