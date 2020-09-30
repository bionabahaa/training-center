<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Input;
use DB;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider_data = Slider::all();
        return view('frontend.pages.slider.index',compact('slider_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lang = \Lang::getLocale();
        $slider_data = Slider::select($lang.'_title as title',$lang.'_description as description','image')->get();
        return view('frontend.pages.slider.create',compact('slider_data'));
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
        $image->move(public_path('frontend/website_images/slider'), $new_name);
        $form_data = array(
            'en_title'              =>   $request->en_title,
            'ar_title'              =>   $request->ar_title,
            'en_description'        =>   $request->en_description,
            'ar_description'        =>   $request->ar_description,
            'image'                 =>   $new_name
        );

        Slider::create($form_data);

        return redirect('slider')->with('success',__('tr.Data Added successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slider_data = Slider::findOrfail($id);
        return view('frontend.pages.slider.show',compact('slider_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider_data = Slider::findOrfail($id);
        return view('frontend.pages.slider.edit',compact('slider_data'));
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
        $slider_data = Slider::findOrfail($id);
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'en_title'       => 'required|unique:sliders,en_title,'.$slider_data->id,
                'ar_title'       => 'required|unique:sliders,ar_title,'.$slider_data->id,
                'en_description' => 'required|unique:sliders,en_title,'.$slider_data->id,
                'ar_description' => 'required|unique:sliders,ar_title,'.$slider_data->id,
                'image'          =>  'image|max:4196',

            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('frontend/website_images/slider'), $image_name);
        }

        else
        {
            $request->validate([
                'en_title'            => 'required|unique:sliders,en_title,'.$slider_data->id,
                'ar_title'            => 'required|unique:sliders,ar_title,'.$slider_data->id,
                'en_description'      => 'required|unique:sliders,en_title,'.$slider_data->id,
                'ar_description'      => 'required|unique:sliders,ar_title,'.$slider_data->id,
            ]);
        }


        $form_data = array(
            'en_title'                =>   $request->en_title,
            'ar_title'                =>   $request->ar_title,
            'en_description'          =>   $request->en_description,
            'ar_description'          =>   $request->ar_description,
            'image'                   =>  $image_name

        );

        Slider::whereId($id)->update($form_data);
        return redirect('slider')->with('success',__('tr.Data Updated successfully'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider_data = Slider::findOrFail($id);
        $slider_data->delete();
        return redirect('slider')->with('success',__('tr.Data deleted successfully'));
    }

    public function view()
    {
        $lang = \Lang::getLocale();

        $slider_data =Slider::select($lang.'_title as title',$lang.'_description as description','image')->orderBy('id', 'asc')->get();

        return view('frontend.pages.slider.view',compact('slider_data'));
    }
}
