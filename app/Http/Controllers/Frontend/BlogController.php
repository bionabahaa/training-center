<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Input;
use DB;
use Session;
use App;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $blogs_data = Blog::all();
        return view('frontend.pages.blogs.index',compact('blogs_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $lang = \Lang::getLocale();
        $blogs_data = Blog::select($lang.'_name as name',$lang.'_description as description','image','date')->get();
        return view('frontend.pages.blogs.create',compact('blogs_data'));
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
            'en_name'             =>  'required',
            'ar_name'             =>  'required',
            'en_description'       =>  'required',
            'ar_description'       =>  'required',
            'date'                 =>  'required',
           'image'                =>  'image|mimes:jpeg,png,jpg,gif,svg|max:4196|required',
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('frontend/website_images/blogs'), $new_name);
        $form_data = array(
            'en_name'              =>   $request->en_name,
            'ar_name'              =>   $request->ar_name,
            'en_description'        =>   $request->en_description,
            'ar_description'        =>   $request->ar_description,
             'date'                  =>   $request->date,
             'image'                 =>   $new_name
        );

        Blog::create($form_data);

        return redirect('blog')->with('success',__('tr.Data Added successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogs_data = Blog::findOrfail($id);
        return view('frontend.pages.blogs.show',compact('blogs_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogs_data = Blog::findOrfail($id);
        return view('frontend.pages.blogs.edit',compact('blogs_data'));
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
        $blogs_data = Blog::findOrfail($id);
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'en_name'             =>   'required',
                'ar_name'             =>   'required',
                'en_description'       =>  'required',
                'ar_description'       =>  'required',
                'date'                 =>  'required',
                'image'                =>  'image|mimes:jpeg,png,jpg,gif,svg|max:4196',

            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('frontend/website_images/blogs'), $image_name);
        }

        else
        {
            $request->validate([
                'en_name'             =>   'required',
                'ar_name'             =>   'required',
                'en_description'       =>  'required',
                'ar_description'       =>  'required',
                'date'                 =>  'required',
                'image'                =>  'image|mimes:jpeg,png,jpg,gif,svg|max:4196',

            ]);
        }


        $form_data = array(
            'en_name'                =>   $request->en_name,
            'ar_name'                =>   $request->ar_name,
            'en_description'          =>   $request->en_description,
            'ar_description'          =>   $request->ar_description,
            'date'                    =>   $request->date,
            'image'                   =>  $image_name

        );

        Blog::whereId($id)->update($form_data);
        return redirect('blog')->with('success',__('tr.Data Updated successfully'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs_data = Blog::findOrFail($id);
        $blogs_data->delete();
        return redirect('blog')->with('success',__('tr.Data deleted successfully'));
    }

    public function view()
    {
        $lang = \Lang::getLocale();

        $blogs_data = Blog::select($lang.'_name as name',$lang.'_description as description','image','date','id')->orderBy('id', 'asc')->get();

        return view('frontend.pages.blogs.view',compact('blogs_data'));
    }


    public function viewblog_details($id)
    {
        $lang = \Lang::getLocale();

        $data['currentblog'] = Blog::select($lang.'_name as name',$lang.'_description as description','image','date')->orderBy('id', 'asc')->where('id',$id)->first();

        $data['allblog'] = Blog::all();

        $data['Comment'] = Comment::select($lang.'_title as title',$lang.'_comments as comments','date','time','id')->orderBy('id', 'asc')->get();


        return view('frontend.pages.blogs.blogsdetails',compact('data'));
    }



}
