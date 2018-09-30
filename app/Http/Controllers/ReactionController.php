<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostReaction;
use App\Reaction;
use Illuminate\Http\Request;

class ReactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reactions = Reaction::all();
        return view('Reactions.index', compact('reactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('reactions.create');
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


        $reaction = new Reaction();
        $reaction->title = $request->title;
        $reaction->body = $request->body;
        $reaction->save();

        return redirect('/reactions')->with('status', 'Reaction is added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reaction  $reaction
     * @return \Illuminate\Http\Response
     */
    public function show(Reaction $reaction)
    {
        //
        return view('reactions.show', compact('reaction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reaction  $reaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Reaction $reaction)
    {
        //
        return view('reactions.edit', compact('reaction'));
    }

    /**
     * @param PostReaction $request
     * @param Reaction $reaction
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PostReaction $request, Reaction $reaction)
    {
        //
        $validated = $request->validated();

        $reaction->title = $request->title;
        $reaction->body = $request->body;
        $reaction->save();

        return redirect()->action('ReactionController@index')->with('correct', 'Reaction edited');
    }

    /**
     * @param Reaction $reaction
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Reaction $reaction)
    {
        //
        $reaction->delete();
        return redirect()->action('ReactionController@index')->with('correct', 'Reaction deleted');
    }
}
