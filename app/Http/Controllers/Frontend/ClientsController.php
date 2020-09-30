<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Input;
use DB;
use Session;
use App;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients_data = Client::all();
        return view('frontend.pages.clients.index',compact('clients_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.pages.clients.create');
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
        $image->move(public_path('frontend/website_images/clients'), $new_name);
        $form_data = array(

            'image'                 =>   $new_name
        );

        Client::create($form_data);

        return redirect('clients')->with('success',__('tr.Data Added successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clients_data = Client::findOrfail($id);
        return view('frontend.pages.clients.show',compact('clients_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clients_data = Client::findOrfail($id);
        return view('frontend.pages.clients.edit',compact('clients_data'));
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
            $image->move(public_path('frontend/website_images/clients'), $image_name);
        }


        $form_data = array(

            'image'                   =>  $image_name

        );

        Client::whereId($id)->update($form_data);
        return redirect('clients')->with('success',__('tr.Data Updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clients_data = Client::findOrFail($id);
        $clients_data->delete();
        return redirect('clients')->with('success',__('tr.Data deleted successfully'));
    }




    public function view()
    {
        $clients_data = Client::all();
        return view('frontend.pages.clients.view',compact('clients_data'));
    }
}
