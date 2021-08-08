<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\post;
use App\category;
use Session;
use DB;
use \Illuminate\Support\Str;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
/*
     public function blog()
        {
            //$data = Post::orderBy('id', 'desc')->get()->take(5);
            $data = Post::orderBy('id', 'desc')->paginate(6);
            //return  $data;
            return view('blog', compact('data'));
        }*/
        

    public function index()
        {
            $category = category::all();
            $data = Post::orderBy('id', 'desc')->get();
            //$posts = Post::orderBy('id', 'desc')->get();
          /*  $data =DB::table('Post')
                 ->join('category','post.category_id','category.id')
                 ->get();*/
            //Post::orderBy('id', 'DESC')->get();
            //$data = category::with('posts')->get();
            //return $data;
          
            return view('admin.post.index', compact('data','category'));
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           $data = post::all();
           $category = category::all();
           return view('admin.post.index', compact('data','category'));
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
                'category' => 'required',
                'title' => 'required',
                'description' => 'required',
                'image' =>  'required|image|max:2048',
            ];

        $this->validate($request,$rules);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(('postimage'), $new_name);
        $form_data = array(
            'category_id'       =>   $request->category,
            'title'        =>   $request->title,
            'description'        =>   $request->description,
            'user_id'        =>   $request->user_id,
            'image'            =>   $new_name
        );

        post::create($form_data);
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
       $data = post::find($id); 
       //return $data;
       return view('blog', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = post::find($id);
        $category = category::find($id);
        return view('admin.post.edit',compact('data','category'));
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
                'title' => ['required', 'string', 'max:255'],
                'description' => 'required',
                'image' =>  'required|image|max:2048',
                'category' => 'required',
            ];

            $this->validate($request,$rules);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(('postimage'), $image_name);
        }
        else
        {
            $rules =[
                'category' => 'required',
                'title' => ['required', 'string', 'max:255'],
                'description' => 'required',
                
            ];

        $this->validate($request,$rules);
        }

        $form_data = array(
            'title'        =>   $request->title,
            'description'        =>   $request->description,
            'category_id'        =>   $request->category,
            'image'            =>     $image_name
        );
  
        post::whereId($id)->update($form_data);
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
        post::where('id',$id)->delete(); 
        category::where('id',$id)->delete(); 
         $data = post::all();
         $category = category::all();
        //return $data;
        return view('admin.post.index', compact('data','category'));

    }
}
