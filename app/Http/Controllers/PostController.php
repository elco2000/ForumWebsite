<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostPost;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::all();
        return view('Posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //


        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect('/posts')->with('status', 'post is added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        return view('posts.edit', compact('post'));
    }

    /**
     * @param PostPost $request
     * @param Post $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PostPost $request, Post $post)
    {
        //
        $validated = $request->validated();

        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect()->action('PostController@index')->with('correct', 'Post edited');
    }

    /**
     * @param Post $post
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */

    public function delete(Post $post)
    {
        return view('posts.delete', compact('post'));
    }


    public function destroy(Post $post)
    {
        //
        $post->delete();
        return redirect()->action('PostController@index')->with('correct', 'Post verwijderd');
    }
}
