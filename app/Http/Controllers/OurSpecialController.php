<?php

namespace App\Http\Controllers;

use App\Models\our_special;
use App\Models\ourspecial_category;
use Illuminate\Http\Request;

class OurSpecialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ourspecials =our_special::latest()->get();
        return view('our_special.index',compact('ourspecials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catagories = ourspecial_category::latest()->get();
        return view('our_special.create', compact('catagories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ourspecial = new our_special();
            $ourspecial->ospecial_cat_id = $request->ospecial_cat_id;

            $ourspecial->content = $request->content;    
            $ourspecial->image = $request->image;
            $ourspecial->save();
    
            return redirect('our_special')->with('message','ourspecial Uploaded Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\our_special  $our_special
     * @return \Illuminate\Http\Response
     */
    public function show(our_special $our_special)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\our_special  $our_special
     * @return \Illuminate\Http\Response
     */
    public function edit(our_special $our_special)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\our_special  $our_special
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, our_special $our_special)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\our_special  $our_special
     * @return \Illuminate\Http\Response
     */
    public function destroy(our_special $our_special)
    {
        //
    }
}
