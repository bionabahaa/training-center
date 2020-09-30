<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aboutus;

use App\Models\Gallery;
use App\Models\instructor;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Input;
use DB;
use Session;
use App;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $aboutus_data = Aboutus::all();
         return view('frontend.pages.aboutus.index',compact('aboutus_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lang = \Lang::getLocale();
        $aboutus_data = Aboutus::select($lang.'_title as title',$lang.'_description as description','image')->get();
        return view('frontend.pages.aboutus.create',compact('aboutus_data'));
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
            'image'              =>  'image|mimes:jpeg,png,jpg,gif,svg|max:4196|required'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('frontend/website_images/aboutus'), $new_name);
        $form_data = array(
            'en_title'              =>   $request->en_title,
            'ar_title'              =>   $request->ar_title,
            'en_description'        =>   $request->en_description,
            'ar_description'        =>   $request->ar_description,
            'image'                 =>   $new_name
        );

                 Aboutus::create($form_data);

            return redirect('about_us')->with('success',__('tr.Data Added successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $about_us = Aboutus::findOrfail($id);
        return view('frontend.pages.aboutus.show',compact('about_us'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aboutus_data = Aboutus::findOrfail($id);
        return view('frontend.pages.aboutus.edit',compact('aboutus_data'));
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
        $aboutus_data = Aboutus::findOrfail($id);
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'en_title'       => 'required|unique:aboutuses,en_title,'.$aboutus_data->id,
                'ar_title'       => 'required|unique:aboutuses,ar_title,'.$aboutus_data->id,
                'en_description' => 'required|unique:aboutuses,en_title,'.$aboutus_data->id,
                'ar_description' => 'required|unique:aboutuses,ar_title,'.$aboutus_data->id,
                'image'          =>  'image|max:4196',

            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('frontend/website_images/aboutus'), $image_name);
        }

        else
            {
                $request->validate([
                    'en_title'            => 'required|unique:aboutuses,en_title,'.$aboutus_data->id,
                    'ar_title'            => 'required|unique:aboutuses,ar_title,'.$aboutus_data->id,
                    'en_description'      => 'required|unique:aboutuses,en_title,'.$aboutus_data->id,
                    'ar_description'      => 'required|unique:aboutuses,ar_title,'.$aboutus_data->id,
                ]);
            }


            $form_data = array(
                'en_title'                =>   $request->en_title,
                'ar_title'                =>   $request->ar_title,
                'en_description'          =>   $request->en_description,
                'ar_description'          =>   $request->ar_description,
                'image'                   =>  $image_name

            );

            Aboutus::whereId($id)->update($form_data);
            return redirect('about_us')->with('success',__('tr.Data Updated successfully'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $aboutus_data = AboutUs::findOrFail($id);
    $aboutus_data->delete();
    return redirect('about_us')->with('success',__('tr.Data deleted successfully'));
}

    public function view()
    {
        $lang = \Lang::getLocale();

        $data['aboutus'] =AboutUs::select($lang.'_title as title',$lang.'_description as description','image')->orderBy('id', 'asc')->get();
        $data['Gallery'] =Gallery::select('image')->orderBy('id', 'asc')->get();
        $data['instructor'] =instructor::select($lang.'_fname as fname',$lang.'_lname as lname','image','address','phone','email','avilable_time','birthday','shortbio','salary')->orderBy('id', 'asc')->get();


        return view('frontend.pages.aboutus.view',compact('data'));
    }
}
