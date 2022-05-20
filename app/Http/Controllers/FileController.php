<?php

namespace App\Http\Controllers;

use App\Models\file;
use Illuminate\Http\Request;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $files =file::latest()->get();
        // return view('file.index',compact('files'));

        $files = file::paginate(3);
        return view('file.index',compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('file.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filename = str_replace(' ','',request('title'));
        $ext = $request->file_link->extension();
        $finalname = $filename.'_'.time().'.'.$request->file_link->extension();
        $request->file_link->move(public_path('uploads/files/'),$finalname);

        $file = new File;
        $file->title = $request->title;
        $file->file_link = $finalname;
        $file->extension = $ext;

        $file->save();

        return redirect('file')->with('message','file Uploaded Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\file  $file
     * @return \Illuminate\Http\Response
     */
    public function show(file $file)
    {
        return view('file.show',compact('file'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\file  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(file $file)
    {
        $file=file::find($id);
        return view('file.edit',compact('file'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\file  $file
     * @return \Illuminate\Http\Response
     */
    
    
        public function update(Request $request,$id)
    {
        $file=file::find($id);
        $file->htext=$request['htext'];
        $file->title=$request['title'];
        $file->ptext=$request['ptext'];
  
        $file->update();
        return redirect()->route('file.index');
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\file  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $file = file::where('id',$id)->first();
        $file->delete();
        return redirect()->back();
    }


    public function getDeleteProjects() {
        $files= file::onlyTrashed()->get();

        return view('file.deletedprojects', compact('files'));
    }
    public function restoreDeletedProjects($id) 
    {

        $file = file::where('id', $id)->withTrashed()->first();

        $file->restore();

        return redirect()->route('file.index')
            ->with('success', 'You successfully restored the file');
    }
    public function deletePermanently($id)
    {
        $file = file::where('id', $id)->withTrashed()->first();

        $file->forceDelete();

        return redirect()->route('file.index')
            ->with('success', 'You successfully deleted the file fromt the Recycle Bin');

    }
}
