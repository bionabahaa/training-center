<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\subject;
use App\Models\instructor;
use App\Models\course;
use App\Models\session;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Suppor\Facades\Input;
use DB;
use App;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $lang = \Lang::getLocale();
        $sessions = session::select($lang.'_name as name','date','time','subject_id','id')->paginate(10);
        return view('backend.pages.sessions.index',compact('sessions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lang = \Lang::getLocale();
        $sessions = session::select($lang.'_name as name','date','time','subject_id','id')->get();

        $subjects = subject::select($lang.'_name as name',$lang.'_description as description',
            'location','date','course_id','room_id','instructor_id','id')->get();

         return view('backend.pages.sessions.create',compact('sessions','subjects'));
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
            'date'                       => 'required',
            'time'                       => 'required',

        ]);



        $session = new session();
        $session->en_name                       = $request->en_name;
        $session->ar_name                       = $request->ar_name;
        $session->date                          = $request->date;
        $session->time                          = $request->time;
        $session->subject_id                    = $request->subject_id;

//        dd($session);
//        exit;




        $session->save();

        return redirect()->route('sessions')->with('success',__('tr.session Added successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $session = session::findOrfail($id);
        return view('backend.pages.sessions.show',compact('session'));
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
        $sessions = session::findOrfail($id);
        $subjects = subject::select($lang.'_name as name',$lang.'_description as description',
            'location','date','course_id','room_id','instructor_id','id')->get();

        return view('backend.pages.sessions.edit',compact('subjects','sessions'));
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
        $session = session::findOrfail($id);


        $request->validate([
            'en_name'                    => 'required',
            'ar_name'                    => 'required',
            'en_description'             => 'required',
            'ar_description'             => 'required',
            'date'                       => 'required',
            'time'                       => 'required',
        ]);


        $session->en_name              = $request->en_name;
        $session->ar_name              = $request->ar_name;
        $session->time                 = $request->time;
        $session->date                 = $request->date;
        $session->subject_id           = $request->subject_id;


        $session->save();


        return redirect()->route('sessions')->with('success',__('tr.session Updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sessions = session::findOrfail($id);
        $sessions->delete();
        return redirect()->route('sessions')->with('success',__('tr.session Deleted successfully'));
    }
}
