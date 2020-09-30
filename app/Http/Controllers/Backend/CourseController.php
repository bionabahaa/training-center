<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\instructor;
use App\Models\course;
use App\Models\Categories;
use App\Models\Subscribers;
use Illuminate\Support\Facades\Input as input;
use DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lang = \Lang::getLocale();
        $courses = course::select($lang.'_topic as topic',$lang.'_description as description',
            'course_level','start_date','end_date','price','course_hours','location','category_id','instructor_id','id','image')->get();
        return view('backend.pages.courses.index',compact('courses'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lang = \Lang::getLocale();

        $courses = course::select($lang.'_topic as topic',$lang.'_description as description',
            'course_level','start_date','end_date','price','course_hours','location','category_id','instructor_id','image')->get();
        $categories = Categories::select($lang.'_name as name',$lang.'_title as title','image','id')->get();

        $instructors = instructor::select($lang.'_fname as fname',$lang.'_lname as lname',
            'address','phone','image','email','avilable_time','birthday','shortbio','code','salary','id')->get();


        return view('backend.pages.courses.create',compact('courses','categories','instructors'));



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
            'en_topic'                   => 'required',
            'ar_topic'                   => 'required',
            'en_description'             => 'required',
            'ar_description'             => 'required',
            'course_level'               => 'required',
            'start_date'                 => 'required',
            'end_date'                   => 'required',
            'duration'                   => 'required',
            'course_hours'               => 'required',
            'price'                      => 'required',
            'location'                   => 'required',
            'image'                      =>  'image|mimes:jpeg,png,jpg,gif,svg|max:4196|required'
        ]);

//        dd($request->all());
        
        $courses = new course();

        $courses->instructor_id                = $request->instructor_id;
        $courses->category_id                  = $request->category_id;
        $courses->en_topic                     = $request->en_topic;
        $courses->ar_topic                     = $request->ar_topic;
        $courses->en_description               = $request->en_description;
        $courses->ar_description               = $request->ar_description;
        $courses->course_level                 = $request->course_level;
        $courses->start_date                   = $request->start_date;
        $courses->end_date                     = $request->end_date;
        $courses->duration                     = $request->duration;
        $courses->course_hours                 = $request->course_hours;
        $courses->price                        = $request->price;
        $courses->location                     = $request->location;




        $course_instructors = new course_instructors();


        $course_instructors->course_id       = $courses->id;
        $course_instructors->instructor_id   = $courses->instructor_id;




        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/backend/dashboard_images/courses');
            $image->move($destinationPath, $name);
            $courses->image = $name;
        }

        $courses->save();

        return redirect()->route('courses')->with('success',__('tr.course Added successfully'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $courses = course::findOrfail($id);
        return view('backend.pages.courses.show',compact('courses'));

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
        $courses = course::findOrfail($id);


        $categories = Categories::select($lang.'_name as name',$lang.'_title as title','image','id')->get();

        $instructors = instructor::select($lang.'_fname as fname',$lang.'_lname as lname',
            'address','phone','image','email','avilable_time','birthday','shortbio','code','salary','id')->get();


        return view('backend.pages.courses.edit',compact('courses','categories','instructors'));

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

        $courses = course::findOrfail($id);


        $request->validate([
            'en_topic'                   => 'required',
            'ar_topic'                   => 'required',
            'en_description'             => 'required',
            'ar_description'             => 'required',
            'course_level'               => 'required',
            'start_date'                 => 'required',
            'end_date'                   => 'required',
            'duration'                   => 'required',
            'course_hours'               => 'required',
            'price'                      => 'required',
            'location'                   => 'required',
        ]);


        $courses->en_topic             = $request->en_topic;
        $courses->ar_topic             = $request->ar_topic;
        $courses->en_description       = $request->en_description;
        $courses->ar_description       = $request->ar_description;
        $courses->course_level         = $request->course_level;
        $courses->start_date           = $request->start_date;
        $courses->end_date             = $request->end_date;
        $courses->duration             = $request->duration;
        $courses->course_hours         = $request->course_hours;
        $courses->location             = $request->location;
        $courses->price                = $request->price;
        $courses->instructor_id        = $request->instructor_id;
        $courses->category_id          = $request->category_id;


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/backend/dashboard_images/courses');
            $image->move($destinationPath, $name);
            $courses->image = $name;
        }

         $courses->save();


        return redirect()->route('courses')->with('success',__('tr.course Updated successfully'));



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $courses = course::findOrfail($id);
        $courses->delete();
        return redirect()->route('courses')->with('success',__('tr.courses Deleted successfully'));
    }

    public function view()
    {
        $lang = \Lang::getLocale();
        $data['course']= course::select($lang.'_topic as topic',$lang.'_description as description',
            'course_level','start_date','end_date','price','course_hours','location','category_id','instructor_id','id','image')->orderBy('id', 'asc')->get();
        $data['Categories']=Categories::select($lang.'_title as title',$lang.'_name as name','id as id','image as image')->orderBy('id', 'asc')->get();
        $data['Subscribers']=Subscribers::select($lang.'_fname as fname','id as id','mobile as mobile','email as email')->orderBy('id', 'asc')->get();

        return view('backend.pages.courses.view',compact('data'));
    }



    public function viewcourse_details($id)
    {

        $lang = \Lang::getLocale();

        $data['currentcourse'] = course::select($lang.'_topic as topic',$lang.'_description as description',
            'course_level','start_date','end_date','price','course_hours','location','category_id','instructor_id','id','image')->orderBy('id', 'asc')->where('id',$id)->first();

        $data['allcourses'] = course::select($lang.'_topic as topic',$lang.'_description as description',
            'course_level','start_date','end_date','price','course_hours','location','category_id','instructor_id','id','image')->orderBy('id', 'asc')->get();

        $data['Categories']=Categories::select($lang.'_title as title',$lang.'_name as name','id as id','image as image')->orderBy('id', 'asc')->get();




        return view('backend.pages.courses.course_details',compact('data'));
    }
}
