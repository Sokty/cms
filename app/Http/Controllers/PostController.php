<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
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
        //create a vriable to store all the posts from the database in it
        $posts = Post::all();
        //return a view and pass in the above variable
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
        $this->validate($request,array(
          'title' =>'required|max:255',
          'body'  =>'required'
        ));
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        //if the post is successfully save , pass the message to the session
        Session::flash('success','the blog post was successfully saved');
        //redirect to the show view and pass the post id to it
        return redirect()->route('posts.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post = Post::find($id); //find the post with this id and pass it to $post
        return View('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // create a variable and pass the  current post to it 
        $post = Post::find($id);

        //return a view and pass in the abov variable,$post
        return view('posts.edit')->withPost($post);     
        // the view, edit.blade.php is created in posts folder then
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
       
        $this->validate($request,array(
          'title' =>'required|max:255',
          'body'  =>'required'
        ));
        $post = new Post;
        $post->title = $request->title; //new of the post = the title sumbited from the form
        $post->body = $request->body;
        $post->save();
        //if the post is successfully save , pass the message to the session
        Session::flash('success','the blog post was successfully update');
        //redirect to the show view and pass the post id to it
        return redirect()->route('posts.show','$post->id');
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
