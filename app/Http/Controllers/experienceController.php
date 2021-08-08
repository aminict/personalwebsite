<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\experience;

class experienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function experience()
    {
        $data = experience::all();
        return view('experience', compact('data'));
    }
    
    public function index()
    {
        $data = experience::all();
        return view('admin.experience.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.experience.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$input = $request->all();
        experience::create($input);
        $data = experience::all();
        return view('admin.experience.index', compact('data'));*/

        $rules =[
                'title' => 'required',
                'ExperienceDec' => 'required',
            ];
        $this->validate($request,$rules);

        experience::create($request->all());
        return redirect()->back()->with('success','insert successfuly');
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
        $data = experience::find($id);
        return view('admin.experience.edit',compact('data'));
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
                'ExperienceDec' => 'required',
            ];
        $this->validate($request,$rules);

        $record = experience::find($id);
        $record->update($request->all());
        return redirect()->back()->with('success','update successfuly');

/*
        $record = experience::find($id);
        $record->update($request->all());
        $data = experience::all();
        return view('admin.experience.index', compact('data'));*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       experience::where('id',$id)->delete(); 
       $data = experience::all();
        return view('admin.experience.index', compact('data'));
    }
}
