<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\student;
use App\Models\course_student;
use App\Models\course;
use App\Models\Categories;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Suppor\Facades\Input;
use DB;
use Session;
use App;
use File;



class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lang = \Lang::getLocale();
        $students = student::select($lang.'_fname as fname',$lang.'_lname as lname',$lang.'_address as address',
            'phone','mobile','email','status','gender','dateofjoin','amount_paid','remaining_amount','image_profession_id','code','id','image','course_id')->get();
        return view('backend.pages.students.index',compact('students'));

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
            'course_level','start_date','end_date','price','course_hours','location','category_id','instructor_id','image','id')->get();
        $students = student::select($lang.'_fname as fname',$lang.'_lname as lname',$lang.'_address as address','course_price',
            'phone','mobile','email','status','gender','dateofjoin','amount_paid','remaining_amount','image_profession_id','code','id','image','course_id')->get();

        return view('backend.pages.students.create',compact('students','courses'));

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
            'code'                       =>'required',
            'en_fname'                   => 'required',
            'ar_fname'                   => 'required',
            'en_lname'                   => 'required',
            'ar_lname'                   => 'required',
            'en_address'                 => 'required',
            'ar_address'                 => 'required',
            'phone'                      => 'required',
            'mobile'                     => 'required',
            'email'                      =>'required',
            'gender'                     => 'required',
            'dateofjoin'                 =>'required',
            'amount_paid'                => 'required',
            'remaining_amount'           => 'required',
            'status'                     => 'required',
            'course_price'               => 'required',
            'image'                      =>  'image|mimes:jpeg,png,jpg,gif,svg|max:4196|required',
            'image_profession_id'        =>  'image|mimes:jpeg,png,jpg,gif,svg|max:4196|required',




        ]);

        $pathImage = public_path().'/backend/dashboard_images/students/images/';
        File::makeDirectory($pathImage, $mode = 0777, true, true);

        $pathprofession = public_path().'/backend/dashboard_images/students/image_profession/';
        File::makeDirectory($pathImage, $mode = 0777, true, true);



        $student = new student();

        $student->code                                    = $request->code;
        $student->en_fname                                = $request->en_fname;
        $student->ar_fname                                = $request->ar_fname;
        $student->en_lname                                = $request->en_lname;
        $student->ar_lname                                = $request->ar_lname;
        $student->en_address                              = $request->en_address;
        $student->ar_address                              = $request->ar_address;
        $student->phone                                   = $request->phone;
        $student->mobile                                  = $request->mobile;
        $student->email                                   = $request->email;
        $student->gender                                  = $request->gender;
        $student->dateofjoin                              = $request->dateofjoin;
        $student->course_price                             = $request->course_price;
        $student->amount_paid                             = $request->amount_paid;
        $student->remaining_amount                        = $request->remaining_amount;
        $student->status                                  = $request->status;
        $student->course_id                               = $request->course_id;

        if ($request->hasFile('image')){

            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move($pathImage, $imageName);
            $student->image = $imageName;

        }

        if ($request->hasFile('image_profession_id')){
            $imageName = time().'.'.request()->image_profession_id->getClientOriginalExtension();
            $request->image_profession_id->move($pathprofession, $imageName);
            $student->image_profession_id = $imageName;
        }



        $student->save();

        $course_student= new course_student();

        $course_student->course_id = $student->course_id;
        $course_student->student_id = $student->id;


        $course_student->save();







        return redirect()->route('students')->with('success',__('tr.students Added successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = student::findOrfail($id);
        return view('backend.pages.students.show',compact('student'));
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
        $student = student::findOrfail($id);


        $courses = course::select($lang.'_topic as topic',$lang.'_description as description',
            'course_level','start_date','end_date','price','course_hours','location','category_id','instructor_id','image','id')->get();


        return view('backend.pages.students.edit',compact('student','courses'));
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
        $student = student::findOrfail($id);

        $request->validate([
            'code'                                         => 'required',
            'en_fname'                                     => 'required',
            'ar_fname'                                     => 'required',
            'en_lname'                                     => 'required',
            'ar_lname'                                     => 'required',
            'en_address'                                   => 'required',
            'ar_address'                                   => 'required',
            'phone'                                        => 'required',
            'mobile'                                       => 'required',
            'email'                                        => 'required',
            'gender'                                       => 'required',
            'dateofjoin'                                   => 'required',
            'course_price'                                 => 'required',
            'amount_paid'                                  => 'required',
            'remaining_amount'                             => 'required',
            'status'                                       => 'required',
            'amount_paid'                                  => 'required',
            'remaining_amount'                             => 'required',


        ]);


        $pathImage = public_path().'/backend/dashboard_images/students/images/';
        File::makeDirectory($pathImage, $mode = 0777, true, true);

        $pathNational = public_path().'/backend/dashboard_images/students/image_profession_id/';
        File::makeDirectory($pathImage, $mode = 0777, true, true);


        $student->code                                           = $request->code;
        $student->en_fname                                       = $request->en_fname;
        $student->ar_fname                                       = $request->ar_fname;
        $student->en_lname                                       = $request->en_lname;
        $student->ar_lname                                       = $request->ar_lname;
        $student->en_address                                     = $request->en_address;
        $student->ar_address                                     = $request->ar_address;
        $student->phone                                          = $request->phone;
        $student->mobile                                         = $request->mobile;
        $student->email                                          = $request->email;
        $student->dateofjoin                                     = $request->dateofjoin;
        $student->gender                                         = $request->gender;
        $student->course_price                                   = $request->course_price;
        $student->amount_paid                                    = $request->amount_paid;
        $student->remaining_amount                               = $request->remaining_amount;
        $student->dateofjoin                                     = $request->dateofjoin;
        $student->status                                         = $request->status;
        $student->course_id                                      = $request->course_id;

        if ($request->hasFile('image')){

            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move($pathImage, $imageName);
            $student->image = $imageName;

        }

        if ($request->hasFile('image_profession_id')){
            $imageName = time().'.'.request()->image_profession_id->getClientOriginalExtension();
            $request->image_profession_id->move($pathNational, $imageName);
            $student->image_profession_id = $imageName;
        }

        $student->save();


        return redirect()->route('students')->with('success',__('tr.student Updated successfully'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = student::findOrfail($id);
        $student->delete();

        return redirect()->route('students')->with('success',__('tr.student Deleted successfully'));
    }

    public function  bookthecourse()
    {
        $lang = \Lang::getLocale();
        $general_data = student::select($lang.'_fname as fname',$lang.'_lname as lname',$lang.'_address as address',
            'phone','mobile','email','status','gender','dateofjoin','amount_paid','remaining_amount','image_profession_id','code','id','image','course_id')->get();
        return view('backend.pages.students.bookthecourse',compact('general_data'));
    }

//    {
//        $lang = \Lang::getLocale();
//        $general_data = DB::table('students')
//            ->join('courses', 'courses.id', '=', 'students.course_id')
//            ->join('instructors', 'instructors.id', '=', 'courses.instructor_id')
//            ->join('categories', 'categories.id', '=', 'courses.category_id')
//            ->get(array($lang.'_topic as topic',$lang.'_description as description','duration','course_level','start_date','end_date','price','course_hours','instructors.image as instructor_image'
//            ,'courses.image as course_image','instructors.en_fname as instructor_name','categories.en_name as category_name','students.en_fname as student_name'))
//            ->toArray();
//
//        return view('backend.pages.students.bookthecourse', compact('general_data'));


    public function  course_student()
    {


        $course_student = course_student::all();
        return view('backend.pages.students.course_student',compact('course_student'));

    }

}
