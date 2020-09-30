<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments_data = Comment::all();
        return view('frontend.pages.comments.index',compact('comments_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lang = \Lang::getLocale();
        $comments_data = Comment::select($lang.'_title as title',$lang.'_comments as comments','date','time')->get();
        return view('frontend.pages.comments.create',compact('comments_data'));
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
            'en_comments'        =>  'required',
            'ar_comments'        =>  'required',
//            'date'               =>  'required',
//            'time'               =>  'required',

        ]);

        $comments_data = new Comment();

        $comments_data->en_title         = $request->en_title;
        $comments_data->ar_title         = $request->ar_title;
        $comments_data->en_comments      = $request->en_comments;
        $comments_data->ar_comments      = $request->ar_comments;
//        $comments_data->date             = $request->date;
//        $comments_data->time             = $request->time;
          $comments_data->save();

        return redirect()->route('view_blog')->with('success',__('tr.Data Added successfully'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comments_data = Comment::findOrfail($id);
        return view('frontend.pages.comments.show',compact('comments_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comments_data = Comment::findOrfail($id);
        return view('frontend.pages.comments.edit',compact('comments_data'));
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
        $comments_data = Comment::findOrfail($id);

        $request->validate([
            'en_title'           =>  'required',
            'ar_title'           =>  'required',
            'en_comments'        =>  'required',
            'ar_comments'        =>  'required',
            'date'               =>  'required',
            'time'               =>  'required',
        ]);

            $comments_data->en_title         = $request->en_title;
            $comments_data->ar_title         = $request->ar_title;
            $comments_data->en_comments      = $request->en_comments;
            $comments_data->ar_comments      = $request->ar_comments;
            $comments_data->date             = $request->date;
            $comments_data->time             = $request->time;


           $comments_data->save();


        return redirect()->route('comments')->with('success',__('tr.instructors Updated successfully' ));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comments_data = Comment::findOrFail($id);
        $comments_data->delete();
        return redirect('comments')->with('success',__('tr.Data deleted successfully'));
    }


    public function view()
    {
        $lang = \Lang::getLocale();

        $comments_data = Comment::select($lang.'_title as title',$lang.'_comments as comments','date','time')->orderBy('id', 'asc')->get();

        return view('frontend.pages.comments.view',compact('comments_data'));
    }
}
