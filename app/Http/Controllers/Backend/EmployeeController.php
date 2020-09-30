<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\emloyee;
use Illuminate\Http\Request;
use File;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { $lang = \Lang::getLocale();
        $employees = emloyee::select($lang.'_fname as fname',$lang.'_lname as lname','image','image_national_id','code',
            'image_contract','mobile','job','gender',$lang.'_address as address','phone','email','birthday','id')->get();
        return view('backend.pages.employees.index',compact('employees'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lang = \Lang::getLocale();
        $emloyees = emloyee::select($lang.'_fname as fname',$lang.'_lname as lname','image','image_national_id',
            'image_contract','mobile','job','gender',$lang.'_address as address','phone','email','birthday')->get();
        return view('backend.pages.employees.create',compact('emloyees'));
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
            'code'                                     =>'required',
            'en_fname'                                 => 'required',
            'ar_fname'                                 => 'required',
            'en_lname'                                 => 'required',
            'ar_lname'                                 => 'required',
            'en_address'                               => 'required',
            'ar_address'                               => 'required',
            'phone'                                    => 'required',
            'mobile'                                   => 'required',
            'email'                                    => 'required|unique:emloyees',
            'job'                                      => 'required',
            'gender'                                   => 'required',
            'birthday'                                 => 'required',
            'image'                                    =>  'image|mimes:jpeg,png,jpg,gif,svg|max:4196|required',
            'image_national_id'                        =>  'image|mimes:jpeg,png,jpg,gif,svg|max:4196|required',
            'image_contract'                           =>  'image|mimes:jpeg,png,jpg,gif,svg|max:4196|required',


        ]);

        $pathImage = public_path().'/backend/dashboard_images/employee/Images/';
        File::makeDirectory($pathImage, $mode = 0777, true, true);

        $pathNational = public_path().'/backend/dashboard_images/employee/Nationals/';
        File::makeDirectory($pathImage, $mode = 0777, true, true);

        $pathContract = public_path().'/backend/dashboard_images/employee/Contracts/';
        File::makeDirectory($pathImage, $mode = 0777, true, true);

        //dd($path);

        $employee = new emloyee();

        $employee->code                         = $request->code;
        $employee->en_fname                     = $request->en_fname;
        $employee->ar_fname                     = $request->ar_fname;
        $employee->en_lname                     = $request->en_lname;
        $employee->ar_lname                     = $request->ar_lname;
        $employee->en_address                   = $request->en_address;
        $employee->ar_address                   = $request->ar_address;
        $employee->phone                        = $request->phone;
        $employee->mobile                       = $request->mobile;
        $employee->email                        = $request->email;
        $employee->job                          = $request->job;
        $employee->gender                       = $request->gender;
        $employee->birthday                     = $request->birthday;
        $employee->job                          = $request->job;
        $employee->gender                       = $request->gender;

        if ($request->hasFile('image')){

            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move($pathImage, $imageName);
            $employee->image = $imageName;

        }

        if ($request->hasFile('image_national_id')){
            $imageName = time().'.'.request()->image_national_id->getClientOriginalExtension();
            $request->image_national_id->move($pathNational, $imageName);
            $employee->image_national_id = $imageName;
        }

        if ($request->hasFile('image_contract')){
            $imageName = time().'.'.request()->image_contract->getClientOriginalExtension();
            $request->image_contract->move($pathContract, $imageName);
            $employee->image_contract = $imageName;
        }


        $employee->save();

        return redirect()->route('employees')->with('success',__('tr.employee Added successfully'));




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $employee = emloyee::findOrfail($id);
        return view('backend.pages.employees.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = emloyee::findOrfail($id);
        return view('backend.pages.employees.edit',compact('employee'));
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
        $employee = emloyee::findOrfail($id);

        $request->validate([
            'code'                                     =>'required',
            'en_fname'                                 => 'required',
            'ar_fname'                                 => 'required',
            'en_lname'                                 => 'required',
            'ar_lname'                                 => 'required',
            'en_address'                               => 'required',
            'ar_address'                               => 'required',
            'phone'                                    => 'required',
            'mobile'                                   => 'required',
            'email'                                    => 'required',
            'job'                                      => 'required',
            'gender'                                   => 'required',
            'birthday'                                 => 'required',

         ]);


        $employee->code                         = $request->code;
        $employee->en_fname                     = $request->en_fname;
        $employee->ar_fname                     = $request->ar_fname;
        $employee->en_lname                     = $request->en_lname;
        $employee->ar_lname                     = $request->ar_lname;
        $employee->en_address                   = $request->en_address;
        $employee->ar_address                   = $request->ar_address;
        $employee->phone                        = $request->phone;
        $employee->mobile                       = $request->mobile;
        $employee->email                        = $request->email;
        $employee->job                          = $request->job;
        $employee->birthday                     = $request->birthday;
        $employee->gender                       = $request->gender;


        $pathImage = public_path().'/backend/dashboard_images/employee/Images/';
        File::makeDirectory($pathImage, $mode = 0777, true, true);

        $pathNational = public_path().'/backend/dashboard_images/employee/Nationals/';
        File::makeDirectory($pathImage, $mode = 0777, true, true);

        $pathContract = public_path().'/backend/dashboard_images/employee/Contracts/';
        File::makeDirectory($pathImage, $mode = 0777, true, true);

        if ($request->hasFile('image')){

            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move($pathImage, $imageName);
            $employee->image = $imageName;

        }

        if ($request->hasFile('image_national_id')){
            $imageName = time().'.'.request()->image_national_id->getClientOriginalExtension();
            $request->image_national_id->move($pathNational, $imageName);
            $employee->image_national_id = $imageName;
        }

        if ($request->hasFile('image_contract')){
            $imageName = time().'.'.request()->image_contract->getClientOriginalExtension();
            $request->image_contract->move($pathContract, $imageName);
            $employee->image_contract = $imageName;
        }

        $employee->save();


        return redirect()->route('employees')->with('success',__('tr.employee Updated successfully'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $employees = emloyee::findOrfail($id);
        $employees->delete();

        return redirect()->route('employees')->with('success',__('tr.employee Deleted successfully'));
    }
}
