<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\subscribers;
use App\Models\course;

class SubscribersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lang = \Lang::getLocale();
        $subscribers = subscribers::select($lang.'_fname as fname','mobile','email','course_id')->orderBy('id', 'asc')->get();
        return view('backend.pages.subscribers.index',compact('subscribers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $lang = \Lang::getLocale();
        $subscribers = subscribers::select($lang.'_fname as fname','mobile','email','course_id')->get();
        $courses = course::select($lang.'_topic as topic',$lang.'_description as description',
            'course_level','start_date','end_date','price','course_hours','location','category_id','instructor_id','image','id')->get();

        return view('backend.pages.subscribers.create',compact('subscribers','courses'));

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
            'en_fname'                   => 'required',
            'mobile'                     => 'required',
            'email'                      => 'required|unique:subscribers',

        ]);

        $subscribers = new subscribers();
        $subscribers->course_id                        = $request->course_id;
        $subscribers->en_fname                         = $request->en_fname;
        $subscribers->mobile                           = $request->mobile;
        $subscribers->email                            = $request->email;

        $subscribers->save();

        return redirect()->route('subscribers')->with('success',__('tr.subscriber Added successfully'));
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subscribers = subscribers::findOrfail($id);
        $subscribers->delete();
        return redirect()->route('subscribers')->with('success',__('tr.subscriber Deleted successfully'));
    }
}
