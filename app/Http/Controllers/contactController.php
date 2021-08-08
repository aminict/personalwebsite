<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
use App\slider;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function welcome()
    {
        $data = contact::all();
        $slider = slider::all();
        return view('welcome', compact('data','slider'));
    }

     public function contact()
    {
         $data = contact::all();
        return view('contact', compact('data'));
    }


    

    public function index()
    {
        $data = contact::all();
        return view('admin.contact.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
          
            $rules =[
                'name' => 'required',
                'profile' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'title' => 'required',
                'profilesms' => 'required',
                'image' =>  'required|image|max:2048',
            ];

            $this->validate($request,$rules);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('postimage'), $image_name);
        }
        else
        {
            $rules =[
                'name' => 'required',
                'profile' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'title' => 'required',
                'profilesms' => 'required',
            ];

        $this->validate($request,$rules);
        }

        $form_data = array(
            'name'       =>   $request->name,
            'profile'        =>   $request->profile,
            'email'        =>   $request->email,
            'phone'        =>   $request->phone,
            'title'        =>   $request->title,
            'profilesms'        =>   $request->profilesms,
            'image'            =>   $image_name
        );
  
        contact::whereId($id)->update($form_data);
        return redirect()->back()->with('success','update successfuly');




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
        $data = contact::find($id);
        return view('admin.contact.edit',compact('data'));
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
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
          
            $rules =[
                 'name' => 'required',
                'profile' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'title' => 'required',
                'profilesms' => 'required',
                'image' =>  'required|image|max:2048',
            ];

            $this->validate($request,$rules);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('postimage'), $image_name);
        }
        else
        {
            $rules =[
                'name' => 'required',
                'profile' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'title' => 'required',
                'profilesms' => 'required',
            ];

        $this->validate($request,$rules);
        }

        $form_data = array(
            'name'       =>   $request->name,
            'profile'        =>   $request->profile,
            'email'        =>   $request->email,
            'phone'        =>   $request->phone,
            'title'        =>   $request->title,
            'profilesms'        =>   $request->profilesms,
            'image'            =>   $image_name
        );
  
        contact::whereId($id)->update($form_data);
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
         contact::where('id',$id)->delete(); 
       $data = contact::all();
        return view('admin.contact.index', compact('data'));
    }
}
