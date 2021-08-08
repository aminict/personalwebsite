<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\post;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function allblog()
    {
        $data = category::all();
        //return  $data;
        return view('allblog', compact('data'));
    }

    public function index()
    {
        $data = category::all();
        return view('admin.category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
                'name' => 'required',
               
            ];
        $this->validate($request,$rules);

        category::create($request->all());
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
        $data = category::find($id); 
       //return $data;
       return view('blog-single', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = category::find($id);
        return view('admin.category.edit',compact('data'));
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
                'name' => 'required',
            ];
        $this->validate($request,$rules);

        $record = category::find($id);
        $record->update($request->all());
        return redirect()->back()->with('success','update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
