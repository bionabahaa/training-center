<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Events;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Input;
use DB;
use Session;
use App;
class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $events_data = Events::all();
        return view('frontend.pages.events.index',compact('events_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $lang = \Lang::getLocale();
        $events_data = Events::select($lang.'_title as title',$lang.'_description as description',$lang.'_address as address','image','email','date','time','phone','status')->get();
        return view('frontend.pages.events.create',compact('events_data'));
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
            'en_title'             =>  'required',
            'ar_title'             =>  'required',
            'en_description'       =>  'required',
            'ar_description'       =>  'required',
            'en_address'           =>  'required',
            'ar_address'           =>  'required',
            'email'                =>  'required',
            'date'                 =>  'required',
            'time'                 =>  'required',
            'phone'                =>  'required',
            'status'               =>  'required',
            'image'                =>  'image|mimes:jpeg,png,jpg,gif,svg|max:4196|required',
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('frontend/website_images/events'), $new_name);
        $form_data = array(
            'en_title'              =>   $request->en_title,
            'ar_title'              =>   $request->ar_title,
            'en_description'        =>   $request->en_description,
            'ar_description'        =>   $request->ar_description,
            'en_address'            =>   $request->en_address,
            'ar_address'            =>   $request->ar_address,
            'email'                 =>   $request->email,
            'date'                  =>   $request->date,
            'time'                  =>   $request->time,
            'status'                =>   $request->status,
            'phone'                 =>   $request->phone,
            'image'                 =>   $new_name
        );

        Events::create($form_data);

        return redirect('events')->with('success',__('tr.Data Added successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $events_data = Events::findOrfail($id);
        return view('frontend.pages.events.show',compact('events_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events_data = Events::findOrfail($id);
        return view('frontend.pages.events.edit',compact('events_data'));
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
        $events_data = Events::findOrfail($id);
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'en_title'             =>  'required|unique:events,en_title,'.$events_data->id,
                'ar_title'             =>  'required|unique:events,ar_title,'.$events_data->id,
                'en_description'       =>  'required|unique:events,en_description,'.$events_data->id,
                'ar_description'       =>  'required|unique:events,ar_description,'.$events_data->id,
                'en_address'           =>  'required|unique:events,en_address,'.$events_data->id,
                'ar_address'           =>  'required|unique:events,ar_address,'.$events_data->id,
                'email'                =>  'required|unique:events,email,'.$events_data->id,
                'date'                 =>  'required|unique:events,ar_address,'.$events_data->id,
                'time'                 =>  'required|unique:events,time,'.$events_data->id,
                'phone'                =>  'required|unique:events,phone,'.$events_data->id,
                'status'               =>  'required|unique:events,status,'.$events_data->id,
                'image'                =>  'image|mimes:jpeg,png,jpg,gif,svg|max:4196|required',

            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('frontend/website_images/events'), $image_name);
        }

        else
        {
            $request->validate([
                'en_title'             =>  'required|unique:events,en_title,'.$events_data->id,
                'ar_title'             =>  'required|unique:events,ar_title,'.$events_data->id,
                'en_description'       =>  'required|unique:events,en_description,'.$events_data->id,
                'ar_description'       =>  'required|unique:events,ar_description,'.$events_data->id,
                'en_address'           =>  'required|unique:events,en_address,'.$events_data->id,
                'ar_address'           =>  'required|unique:events,ar_address,'.$events_data->id,
                'date'                 =>  'required|unique:events,ar_address,'.$events_data->id,
                'email'                =>  'required|unique:events,email,'.$events_data->id,
                'time'                 =>  'required|unique:events,time,'.$events_data->id,
                'phone'                =>  'required|unique:events,phone,'.$events_data->id,
                'status'               =>  'required|unique:events,status,'.$events_data->id,

            ]);
        }


        $form_data = array(
            'en_title'                =>   $request->en_title,
            'ar_title'                =>   $request->ar_title,
            'en_description'          =>   $request->en_description,
            'ar_description'          =>   $request->ar_description,
            'en_address'              =>   $request->en_address,
            'ar_address'              =>   $request->ar_address,
            'email'                   =>   $request->email,
            'date'                    =>   $request->date,
            'time'                    =>   $request->time,
            'status'                  =>   $request->status,
            'phone'                   =>   $request->phone,
            'image'                   =>  $image_name

        );

        Events::whereId($id)->update($form_data);
        return redirect('events')->with('success',__('tr.Data Updated successfully'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $events_data = Events::findOrFail($id);
        $events_data->delete();
        return redirect('events')->with('success',__('tr.Data deleted successfully'));
    }

    public function view()
    {
        $lang = \Lang::getLocale();

        $events_data = Events::select($lang.'_title as title',$lang.'_description as description',$lang.'_address as address','image','email','date','time','phone','status','id')->orderBy('id', 'asc')->get();

        return view('frontend.pages.events.view',compact('events_data'));
    }


    public function viewevents_details($id)
    {

        $lang = \Lang::getLocale();
        $data['currentevents'] = Events::select($lang.'_description as description',$lang.'_address as address','image','email','date','time','phone','status')->where('id',$id)->first();

//        $data['previousUserID'] = Events::where('id', '<',$data['currentevents']->id)->orderBy('id','desc')->first();
//
//        $data['nextUserID'] = Events::where('id', '>',$data['currentevents']->id)->orderBy('id')->first();

//         $data['previousUserID'] = Events::where('id', '<', $data['currentevents']->id)->max('id');
//
//         // Same for the next user's id as previous user's but in the other direction
//         $data['nextUserID'] = Events::where('id', '>', $data['currentevents']->id)->min('id');

        return view('frontend.pages.events.eventdetails',compact('data'));




    }





}
