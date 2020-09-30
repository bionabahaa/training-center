<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contactus;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Input;
use DB;
use Session;
use App;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Contactus_data = Contactus::all();
        return view('frontend.pages.contactus.index',compact('Contactus_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $lang = \Lang::getLocale();
        $Contactus_data = Contactus::select($lang.'_name as name',$lang.'_message as message','email')->get();
        return view('frontend.pages.contactus.create',compact('Contactus_data'));
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
            'en_name'           =>  'required',
            'ar_name'           =>  'required',
            'en_message'     =>  'required',
            'ar_message'     =>  'required',
            'email'   => 'required|unique:contactuses',
        ]);

        $Contactus = new Contactus();

        $Contactus->en_name      = $request->en_name;
        $Contactus->ar_name      = $request->ar_name;
        $Contactus->en_message   = $request->en_message;
        $Contactus->ar_message   = $request->ar_message;
        $Contactus->email        = $request->email;

        $Contactus->save();

//        return redirect()->route('contactus')->with('success',__('tr.Data Added successfully'));
          return back()->with('success', 'Thanks for contacting us!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $Contactus_data = Contactus::findOrFail($id);
        $Contactus_data->delete();
        return redirect('contactus')->with('success',__('tr.Data deleted successfully'));
    }

    public function view()
    {
        $lang = \Lang::getLocale();

        $Contactus_data =Contactus::select($lang.'_name as name',$lang.'_message as message','email')->orderBy('id', 'asc')->get();

        return view('frontend.pages.contactus.view',compact('Contactus_data'));
    }

}
