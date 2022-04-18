<?php

namespace App\Http\Controllers;

use App\Models\menu_catagory;
use Illuminate\Http\Request;

class MenuCatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menucats =menu_catagory::latest()->get();
        return view('menu_catagory.index',compact('menucats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('menu_catagory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menu_catagory = new menu_catagory;
        $menu_catagory->name = $request->name;
        
        $menu_catagory->save();

        return redirect('menu_catagory');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\menu_catagory  $menu_catagory
     * @return \Illuminate\Http\Response
     */
    public function show(menu_catagory $menu_catagory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\menu_catagory  $menu_catagory
     * @return \Illuminate\Http\Response
     */
    public function edit(menu_catagory $menu_catagory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\menu_catagory  $menu_catagory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, menu_catagory $menu_catagory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\menu_catagory  $menu_catagory
     * @return \Illuminate\Http\Response
     */
    public function destroy(menu_catagory $menu_catagory)
    {
        //
    }
}
