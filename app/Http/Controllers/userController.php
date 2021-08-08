<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = user::all();
        return view('admin.user.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
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
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' =>  ['required','min:8',
                                    'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'
                                ],
                'image' =>  'required|image|max:2048',
            ];

        $this->validate($request,$rules);
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('image1'), $new_name);
        $form_data = array(
            'name'       =>   $request->name,
            'email'        =>   $request->email,
            'password' => Hash::make($request['password']),
            'image'            =>   $new_name
        );

        user::create($form_data);

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
        $data = user::find($id);
        return view('admin.user.edit',compact('data'));
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
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'password' =>  ['required','min:8',
                                    'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'
                                ],
                'image' =>  'required|image|max:2048',
            ];

            $this->validate($request,$rules);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image1'), $image_name);
        }
        else
        {
            $rules =[
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'password' =>  ['required','min:8',
                                    'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'
                                ],
            ];

        $this->validate($request,$rules);
        }

        $form_data = array(
            'name'       =>   $request->name,
            'email'        =>   $request->email,
            'password' => Hash::make($request['password']),
            'image'            =>   $image_name
        );
  
        user::whereId($id)->update($form_data);
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
        user::where('id',$id)->delete(); 
        $data = user::all();
        return view('admin.user.index', compact('data'));
    }
}
