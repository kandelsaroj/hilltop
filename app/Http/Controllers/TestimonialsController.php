<?php

namespace App\Http\Controllers;

use App\Models\testimonials;
use App\Models\file;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials=testimonials::latest()->get();
        return view('testimonial.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $files=file::all();
        return view('testimonial.create',compact('files'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimonial = new testimonials;
        $testimonial->name = $request->name;
        $testimonial->image = $request->image;
        $testimonial->ocupation = $request->ocupation;
        $testimonial->content = $request->content;
        $testimonial->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function show(testimonials $testimonials)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = testimonial::find($id);
        return view('$testimonial.edit', compact('$testimonial'));
    }

    /**y
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, testimonials $testimonials)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function destroy(testimonials $testimonials)
    {
        //
    }
}
