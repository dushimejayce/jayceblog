<?php

namespace blog\Http\Controllers;
use Illuminate\Http\Request;
use blog\Http\Requests;


use blog\Post;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create a variable which can store all blog post from database

        $posts =Post::orderby('id','desc')->paginate(10);

        //return view  and pass it into above variable

        return view('posts.index')->withPosts($posts); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //validate the data

        $this->validate($request,array(
            'title'=>'required|max:255',
            'body'=>'required'
        ));
        //store it in database
        $post=new Post;
        $post->title=$request->title;
        $post->body=$request->body;
        $post->save();

        Session::flash('success','The Post Was Successfully saved');
        //redirect it to another page

        return redirect()->route('posts.show',$post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $post=Post::find($id);
       return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Find a post in database and save it as variable
        $post=Post::find($id);

        //return a view which is previously created
        return view('posts.edit')->withPost($post);
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
        //validate data
        $this->validate($request,array(
            'title'=>'required|max:255',
            'body'=>'required'));

        //save the data to database
            $post=Post::find($id);
            $post->title=$request->input('title');
            $post->body=$request->input('body');

            $post->save();
        //set flash data with success message
           Session::flash('success','The Post Was Successfully saved');
        //redirectwith flashdata to post.show
           return redirect()->route('posts.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        Session::flash('success','The Post Was Successfully deleted');

        return redirect()->route('posts.index');
    }
}
