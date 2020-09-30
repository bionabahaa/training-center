<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Categories;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Suppor\Facades\Input;
use DB;
use Session;
use App;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories_data = Categories::all();
        return view('backend.pages.categories.index',compact('categories_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lang = \Lang::getLocale();
        $categories_data = Categories::select($lang.'_title as title',$lang.'_name as name','image')->get();
        return view('backend.pages.categories.create',compact('categories_data'));
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
            'en_name'            =>  'required',
            'ar_name'            =>  'required',
            'image'              =>  'image|mimes:jpeg,png,jpg,gif,svg|max:4196|required'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('backend/dashboard_images/categories'), $new_name);
        $form_data = array(
            'en_title'              =>   $request->en_title,
            'ar_title'              =>   $request->ar_title,
            'en_name'               =>   $request->en_name,
            'ar_name'               =>   $request->ar_name,
            'image'                 =>   $new_name
        );

        Categories::create($form_data);

        return redirect('categories')->with('success',__('tr.Data Added successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories_data = Categories::findOrfail($id);
        return view('backend.pages.categories.show',compact('categories_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories_data = Categories::findOrfail($id);
        return view('backend.pages.categories.edit',compact('categories_data'));
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
        $categories_data = Categories::findOrfail($id);
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'en_title'       => 'required|unique:categories,en_title,'.$categories_data->id,
                'ar_title'       => 'required|unique:categories,ar_title,'.$categories_data->id,
                'en_name'        => 'required|unique:categories,en_title,'.$categories_data->id,
                'ar_name'        => 'required|unique:categories,ar_title,'.$categories_data->id,
                'image'          =>  'image|max:4196',

            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('backend/dashboard_images/categories'), $image_name);
        }

        else
        {
            $request->validate([
                'en_title'       => 'required|unique:categories,en_title,'.$categories_data->id,
                'ar_title'       => 'required|unique:categories,ar_title,'.$categories_data->id,
                'en_name'        => 'required|unique:categories,en_title,'.$categories_data->id,
                'ar_name'        => 'required|unique:categories,ar_title,'.$categories_data->id,
            ]);
        }


        $form_data = array(
            'en_title'                =>   $request->en_title,
            'ar_title'                =>   $request->ar_title,
            'en_name'                 =>   $request->en_name,
            'ar_name'                 =>   $request->ar_name,
            'image'                   =>  $image_name

        );

        Categories::whereId($id)->update($form_data);
        return redirect('categories')->with('success',__('tr.Data Updated successfully'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories_data = Categories::findOrFail($id);
        $categories_data->delete();
        return redirect('categories')->with('success',__('tr.Data deleted successfully'));
    }

    public function view()
    {
        $lang = \Lang::getLocale();
        $categories_data = Categories::select($lang.'_title as title',$lang.'_name as name','image')->orderBy('id', 'asc')->get();

        return view('backend.pages.categories.view',compact('categories_data'));
    }
}
