<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project;

class projectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function project()
    {
         $data = project::all();
        return view('project', compact('data'));
    }
    
    public function index()
    {
         $data = project::all();
        return view('admin.project.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules =[
                'title' => 'required',
                'projectDec' => 'required',
            ];
        $this->validate($request,$rules);

        project::create($request->all());
        return redirect()->back()->with('success','insert successfuly');

        //$input = $request->all();
        //project::create($input);
        //$data = project::all();
        //return view('admin.project.index', compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = project::find($id);
        return view('admin.project.edit',compact('data'));
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
         $rules =[
                'title' => 'required',
                'projectDec' => 'required',
            ];
        $this->validate($request,$rules);

        $record = project::find($id);
        $record->update($request->all());
        return redirect()->back()->with('success','update successfuly');
        //$data = project::all();
        //return view('admin.project.index', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        project::where('id',$id)->delete(); 
       $data = project::all();
        return view('admin.project.index', compact('data'));
    }
}
