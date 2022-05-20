<?php

namespace App\Http\Controllers;

use App\Models\ourspecial_category;
use Illuminate\Http\Request;

class OurspecialCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialcats =ourspecial_category::paginate(3);;
        return view('ourspecial_category.index',compact('specialcats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('ourspecial_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ourspecial_category = new ourspecial_category;
        $ourspecial_category->name = $request->name;
        
        $ourspecial_category->save();

        return redirect('ourspecial_catagory');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ourspecial_category  $ourspecial_category
     * @return \Illuminate\Http\Response
     */
    public function show(ourspecial_category $ourspecial_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ourspecial_category  $ourspecial_category
     * @return \Illuminate\Http\Response
     */
    public function edit(ourspecial_category $ourspecial_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ourspecial_category  $ourspecial_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ourspecial_category $ourspecial_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ourspecial_category  $ourspecial_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(ourspecial_category $ourspecial_category)
    {
        //
    }
}
