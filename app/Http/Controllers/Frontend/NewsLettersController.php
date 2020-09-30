<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newsletters;

class NewsLettersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Newsletters_data = Newsletters::all();
        return view('frontend.pages.newsletters.index',compact('Newsletters_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('frontend.pages.newsletters.create');
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
            'email'           => 'required|unique:newsletters',


        ]);

        $Newsletters_data = new Newsletters();
        $Newsletters_data->email  = $request->email;
        $Newsletters_data->save();

        return redirect()->route('newsletters')->with('success',('Data Added successfully'));
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
        //
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
        $Newsletters_data = Newsletters::findOrFail($id);
        $Newsletters_data->delete();
        return redirect('newsletters')->with('success',('Data deleted successfully'));
    }

    public function view()
    {
        $Newsletters_data = Newsletters::all();
        return view('frontend.pages.newsletters.view',compact('Newsletters_data'));

    }
}
