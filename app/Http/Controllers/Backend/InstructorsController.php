<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\instructor;

use App\Models\course;

class InstructorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructors = instructor::all();
        return view('backend.pages.instructors.index',compact('instructors'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lang = \Lang::getLocale();
        $instructors = instructor::select($lang.'_fname as fname',$lang.'_lname as lname','image',
            'address','phone','email','birthday','avilable_time','shortbio','salary')->get();
        return view('backend.pages.instructors.create',compact('instructors'));
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
            'code'               =>  'required|numeric',
            'en_fname'           =>  'required|max:255|min:5',
            'ar_fname'           =>  'required|max:255|min:5',
            'en_lname'           =>  'required|max:255|min:5',
            'ar_lname'           =>  'required|max:255|min:5',
            'address'            =>  'required|max:255|min:5',
            'phone'              =>  'required|max:255|min:2',
            'email'              =>  'required|unique:instructors',
            'birthday'           =>  'required|date',
            'avilable_time'      =>  'required',
            'shortbio'           =>  'required',
            'salary'             =>  'required|numeric',
            'image'              =>  'image|mimes:jpeg,png,jpg,gif,svg|max:4196|required'


        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('backend/dashboard_images/instructors'), $new_name);
        $form_data = array(
            'code'                        =>   $request->code,
            'en_fname'                    =>   $request->en_fname,
            'ar_fname'                    =>   $request->ar_fname,
            'en_lname'                    =>   $request->en_lname,
            'ar_lname'                    =>   $request->ar_lname,
            'email'                       =>   $request->email,
            'address'                     =>   $request->address,
            'phone'                       =>   $request->phone,
            'birthday'                    =>   $request->birthday,
            'avilable_time'               =>   $request->avilable_time,
            'shortbio'                    =>   $request->shortbio,
            'salary'                      =>   $request->salary,
            'image'                       =>   $new_name
        );

        instructor::create($form_data);

        return redirect('instructors')->with('success',__('tr.instructor Added successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $instructors = instructor::findOrfail($id);
        return view('backend.pages.instructors.show',compact('instructors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instructors = instructor::findOrfail($id);
        return view('backend.pages.instructors.edit',compact('instructors'));
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
        $instructors = instructor::findOrfail($id);
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'code'                   => 'required|unique:instructors,code,'.$instructors->id,
                'en_fname'               => 'required|unique:instructors,en_fname,'.$instructors->id,
                'ar_fname'               => 'required|unique:instructors,ar_fname,'.$instructors->id,
                'en_lname'               => 'required|unique:instructors,en_lname,'.$instructors->id,
                'ar_lname'               => 'required|unique:instructors,ar_lname,'.$instructors->id,
                'email'                  => 'required|unique:instructors,email,'.$instructors->id,
                'address'                => 'required|unique:instructors,address,'.$instructors->id,
                'phone'                  => 'required|unique:instructors,phone,'.$instructors->id,
                'birthday'               => 'required|unique:instructors,birthday,'.$instructors->id,
                'avilable_time'          => 'required|unique:instructors,avilable_time,'.$instructors->id,
                'shortbio'               => 'required|unique:instructors,shortbio,'.$instructors->id,
                'salary'                 => 'required|unique:instructors,salary,'.$instructors->id,
                'image'                  =>  'image|max:4196',

            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('backend/dashboard_images/instructors'), $image_name);
        }

        else
        {
            $request->validate([
                'code'                   => 'required|unique:instructors,code,'.$instructors->id,
                'en_fname'               => 'required|unique:instructors,en_fname,'.$instructors->id,
                'ar_fname'               => 'required|unique:instructors,ar_fname,'.$instructors->id,
                'en_lname'               => 'required|unique:instructors,en_lname,'.$instructors->id,
                'ar_lname'               => 'required|unique:instructors,ar_lname,'.$instructors->id,
                'email'                  => 'required|unique:instructors,email,'.$instructors->id,
                'address'                => 'required|unique:instructors,address,'.$instructors->id,
                'phone'                  => 'required|unique:instructors,phone,'.$instructors->id,
                'birthday'               => 'required|unique:instructors,birthday,'.$instructors->id,
                'avilable_time'          => 'required|unique:instructors,avilable_time,'.$instructors->id,
                'shortbio'               => 'required|unique:instructors,shortbio,'.$instructors->id,
                'salary'                 => 'required|unique:instructors,salary,'.$instructors->id,
                'image'                  =>  'image|max:4196',
            ]);
        }


        $form_data = array(
            'code'                         =>   $request->code,
            'en_fname'                     =>   $request->en_fname,
            'ar_fname'                     =>   $request->ar_fname,
            'en_lname'                     =>   $request->en_lname,
            'ar_lname'                     =>   $request->ar_lname,
            'address'                      =>   $request->address,
            'phone'                        =>   $request->phone,
            'email'                        =>   $request->email,
            'birthday'                     =>   $request->birthday,
            'avilable_time'                =>   $request->avilable_time,
            'shortbio'                     =>   $request->shortbio,
            'salary'                       =>   $request->salary,
            'image'                         =>  $image_name

        );

        instructor::whereId($id)->update($form_data);
        return redirect('instructors')->with('success',__('tr.instructor Updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $instructors = instructor::findOrfail($id);
        $instructors->delete();
        return redirect()->route('instructors')->with('success',__('tr.instructors Deleted'));
    }


    public function view()
    {
        $lang = \Lang::getLocale();
        $instructors = instructor::select($lang.'_fname as fname',$lang.'_lname as lname','image',
            'address','phone','email','birthday','avilable_time','shortbio','salary','id')->orderBy('id', 'asc')->get();
        return view('backend.pages.instructors.view',compact('instructors'));
    }


    public function viewinstructor_details($id)
    {
        $lang = \Lang::getLocale();

        $data['instructor'] = instructor::select($lang.'_fname as fname',$lang.'_lname as lname','image',
            'address','phone','email','birthday','avilable_time','shortbio','salary')->orderBy('id', 'asc')->where('id',$id)->first();

        $data['allcourse'] = course::select($lang.'_topic as topic',$lang.'_description as description',
            'course_level','start_date','end_date','price','course_hours','location','category_id','instructor_id','id','image')->orderBy('id', 'asc')->get();



        return view('backend.pages.instructors.instructor_details',compact('data'));
    }

}
