<?php

namespace App\Http\Controllers;

use App\Models\why_choose_us;
use App\Models\file;
use Illuminate\Http\Request;

class WhyChooseUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $why_choose_uss =why_choose_us::latest()->get();
        return view('why_choose_us.index',compact('why_choose_uss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $files=file::all();
        return view('why_choose_us.create',compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $why_choose_us = new why_choose_us;
        $why_choose_us->h1 = $request->h1;
        $why_choose_us->content = $request->content;
        $why_choose_us->img = $request->img;
        
        $why_choose_us->save();

        return redirect('why_choose_us')->with('message','File Uploaded Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\why_choose_us  $why_choose_us
     * @return \Illuminate\Http\Response
     */
    public function show(why_choose_us $why_choose_us)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\why_choose_us  $why_choose_us
     * @return \Illuminate\Http\Response
     */
    public function edit(why_choose_us $why_choose_us)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\why_choose_us  $why_choose_us
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, why_choose_us $why_choose_us)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\why_choose_us  $why_choose_us
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $why_choose_us = why_choose_us::where('id',$id)->first();
        $why_choose_us->delete();
        return redirect()->back();
    }
}
