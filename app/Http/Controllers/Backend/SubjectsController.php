<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\subject;
use App\Models\instructor;
use App\Models\course;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Suppor\Facades\Input;
use DB;
use Session;
use App;


class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lang = \Lang::getLocale();
        $subjects = subject::select($lang.'_name as name',$lang.'_description as description',
            'location','date','course_id','room_id','id')->paginate(10);
        return view('backend.pages.subjects.index',compact('subjects'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lang = \Lang::getLocale();
        $subjects = subject::select($lang.'_name as name',$lang.'_description as description',
            'location','date','course_id','room_id','id')->get();

        $courses = course::select($lang.'_topic as topic',$lang.'_description as description',
            'course_level','start_date','end_date','price','course_hours','location','category_id','instructor_id','image','id')->get();

        $instructors = instructor::select($lang.'_fname as fname',$lang.'_lname as lname',
            'address','phone','image','email','avilable_time','birthday','shortbio','code','salary','id')->get();


        return view('backend.pages.subjects.create',compact('courses','subjects','instructors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'en_name'                    => 'required',
            'ar_name'                    => 'required',
            'en_description'             => 'required',
            'ar_description'             => 'required',
            'location'                   => 'required',
            'date'                       => 'required',

        ]);



        $subject = new subject();
        $subject->en_name                      = $request->en_name;
        $subject->ar_name                      = $request->ar_name;
        $subject->en_description               = $request->en_description;
        $subject->ar_description               = $request->ar_description;
        $subject->location                     = $request->location;
        $subject->date                         = $request->date;
        $subject->course_id                    = $request->course_id;

        $subject->save();

        return redirect()->route('subjects')->with('success',__('tr.subject Added successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subjects = subject::findOrfail($id);
        return view('backend.pages.subjects.show',compact('subjects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lang = \Lang::getLocale();
        $subjects = subject::findOrfail($id);

        $courses = course::select($lang.'_topic as topic',$lang.'_description as description',
            'course_level','start_date','end_date','price','course_hours','location','category_id','instructor_id','image','id')->get();

        $instructors = instructor::select($lang.'_fname as fname',$lang.'_lname as lname',
            'address','phone','image','email','avilable_time','birthday','shortbio','code','salary','id')->get();


        return view('backend.pages.subjects.edit',compact('subjects','instructors','courses'));
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
        $subjects = subject::findOrfail($id);


        $request->validate([
            'en_name'                    => 'required',
            'ar_name'                    => 'required',
            'en_description'             => 'required',
            'ar_description'             => 'required',
            'location'                   => 'required',
            'date'                       => 'required',
        ]);


        $subjects->en_name              = $request->en_name;
        $subjects->ar_name              = $request->ar_name;
        $subjects->en_description       = $request->en_description;
        $subjects->ar_description       = $request->ar_description;
        $subjects->location             = $request->location;
        $subjects->date                 = $request->date;
        $subjects->course_id            = $request->course_id;

        $subjects->save();


        return redirect()->route('subjects')->with('success',__('tr.subject Updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subjects = subject::findOrfail($id);
        $subjects->delete();
        return redirect()->route('subjects')->with('success',__('tr.subject Deleted successfully'));
    }
}
