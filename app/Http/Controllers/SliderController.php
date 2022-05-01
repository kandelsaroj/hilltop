<?php

namespace App\Http\Controllers;

use App\Models\slider;
use App\Models\file;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders =slider::latest()->get();
        return view('slider.index',compact('sliders'));

    
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $files =file::latest()->get();
        return view('file.create', compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            $slider = new slider;
            $slider->h1 = $request->h1;
            $slider->h2 = $request->h2;
            $slider->para = $request->para;
            $slider->btn_text1 = $request->btn_text1;
            $slider->btn_text2 = $request->btn_text2;
            $slider->btn_link1 = $request->btn_link1;
            $slider->btn_link2 = $request->btn_link2;
            $slider->img_link = $request->img_link;
            
            $slider->save();
            return redirect()->back();

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(slider $sliders, $id)
    {
       $sliders = slider::where('id',$id)->first();
        return view('slider.show',compact('sliders'));

    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(slider $slider)
    {
        //
    }
}
