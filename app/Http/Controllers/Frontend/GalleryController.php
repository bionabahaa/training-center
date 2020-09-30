<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Input;
use DB;
use Session;
use App;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery_data = Gallery::all();
        return view('frontend.pages.gallery.index',compact('gallery_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.pages.gallery.create');
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

            'image'              =>  'image|mimes:jpeg,png,jpg,gif,svg|max:4196|required'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('frontend/website_images/gallery'), $new_name);
        $form_data = array(

            'image'                 =>   $new_name
        );

        Gallery::create($form_data);

        return redirect('gallery')->with('success',__('tr.Data Added successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gallery_data = Gallery::findOrfail($id);
        return view('frontend.pages.gallery.show',compact('gallery_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery_data = Gallery::findOrfail($id);
        return view('frontend.pages.gallery.edit',compact('gallery_data'));
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
//        $gallery_data = Gallery::findOrfail($id);
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([

                'image'          =>  'image|max:4196',

            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('frontend/website_images/gallery'), $image_name);
        }

        else
        {
            $request->validate([

            ]);
        }


        $form_data = array(

            'image'                   =>  $image_name

        );

        Gallery::whereId($id)->update($form_data);
        return redirect('gallery')->with('success',__('tr.Data Updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery_data = Gallery::findOrFail($id);
        $gallery_data->delete();
        return redirect('gallery')->with('success',__('tr.Data deleted successfully'));
    }




    public function view()
    {
        $gallery_data = Gallery::all();
        return view('frontend.pages.gallery.view',compact('gallery_data'));
    }
}
