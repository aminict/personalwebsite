<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slider;

class sliderController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   /* public function slider()
    {
        $data = slider::all();
        //return view('slider', compact('data'));
        return view('welcome', compact('data'));
    }*/



    public function index()
    {
        $data = slider::all();
        return view('admin.slider.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
        $rules =[
                'title' => 'required',
                'message' => 'required',
                //'image' =>  'required|image|max:2048',
               
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3072',
                'publish' => 'required',
            ];

        $this->validate($request,$rules);

       /* if ($request->hasFile('image')) {
            $request->image->store('public');
        } 
*/ 
        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('sliderimage'), $new_name);
        $form_data = array(
            'title'       =>   $request->title,
            'message'        =>   $request->message,
            'publish'        =>   $request->publish,
            'image'            =>   $new_name
        );

        slider::create($form_data);

        //testemonial::create($request->all());
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
        $data = slider::find($id);
        return view('admin.slider.edit',compact('data'));
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
         /*$rules =[
                'title' => 'required',
                'message' => 'required',
                'image' => 'required',
                'publish' => 'required',
            ];
        $this->validate($request,$rules);

        $record = testemonial::find($id);
        $record->update($request->all());
        return redirect()->back()->with('success','update successfuly');*/
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
          
            $rules =[
                'title' => 'required',
                'message' => 'required',
                'image' =>  'required|image|max:3072',
               
                //'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'publish' => 'required',
            ];

            $this->validate($request,$rules);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('sliderimage'), $image_name);
        }
        else
        {
            $rules =[
                'title' => 'required',
                'message' => 'required',
                //'image' =>  'required|image|max:2048',
                //'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'publish' => 'required',
            ];

        $this->validate($request,$rules);
        }

        $form_data = array(
            'title'       =>   $request->title,
            'message'        =>   $request->message,
            'publish'        =>   $request->publish,
            'image'            =>   $image_name
        );
  
        slider::whereId($id)->update($form_data);
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
        slider::where('id',$id)->delete(); 
        $data = slider::all();
        return view('admin.slider.index', compact('data'));
    }
}
