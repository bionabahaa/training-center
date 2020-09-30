<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Input;
use DB;
use Session;
use App;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faq_data = Faq::all();
        return view('frontend.pages.faqs.index',compact('faq_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lang = \Lang::getLocale();
        $faq_data = Faq::select($lang.'_title as title',$lang.'_description as description')->get();
        return view('frontend.pages.faqs.create',compact('faq_data'));
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
            'en_title'           =>  'required',
            'ar_title'           =>  'required',
            'en_description'     =>  'required',
            'ar_description'     =>  'required',

        ]);

        $faq_data = new Faq();

        $faq_data->en_title         = $request->en_title;
        $faq_data->ar_title         = $request->ar_title;
        $faq_data->en_description   = $request->en_description;
        $faq_data->ar_description   = $request->ar_description;


        $faq_data->save();

        return redirect()->route('faqs')->with('success',__('tr.Data Added successfully'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faq_data = Faq::findOrfail($id);
        return view('frontend.pages.faqs.show',compact('faq_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq_data = Faq::findOrfail($id);
        return view('frontend.pages.faqs.edit',compact('faq_data'));
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
        $faq_data = Faq::findOrfail($id);

        $request->validate([
            'en_title'           =>  'required',
            'ar_title'           =>  'required',
            'en_description'     =>  'required',
            'ar_description'     =>  'required',
        ]);



        $faq_data->en_title         = $request->en_title;
        $faq_data->ar_title         = $request->ar_title;
        $faq_data->en_description   = $request->en_description;
        $faq_data->ar_description   = $request->ar_description;


        $faq_data->save();


        return redirect()->route('faqs')->with('success',__('tr.instructors Updated successfully' ));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faq_data = Faq::findOrFail($id);
        $faq_data->delete();
        return redirect('faqs')->with('success',__('tr.Data deleted successfully'));
    }


    public function view()
    {
        $lang = \Lang::getLocale();

        $faq_data =Faq::select($lang.'_title as title',$lang.'_description as description')->orderBy('id', 'asc')->get();

        return view('frontend.pages.faqs.view',compact('faq_data'));
    }
}
