<?php

namespace App\Http\Controllers;

use App\Maincategory;
use Illuminate\Http\Request;

class MaincategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $maincategories = Maincategory::all();
        return view ('maincategories.index', compact('maincategories') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('maincategories.create');
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
        $maincategory = new Maincategory();
        $maincategory->title = $request['title'];
        $maincategory->description = $request['description'];
        $maincategory->save();

        return redirect()->action('MaincategoryController@index')->with('correct', 'Main category aangemaakt');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Maincategory  $maincategory
     * @return \Illuminate\Http\Response
     */
    public function show(Maincategory $maincategory)
    {
        //
        return view('maincategories.show', compact('maincategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Maincategory  $maincategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Maincategory $maincategory)
    {
        //
        return view('maincategories.edit', compact('maincategory' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Maincategory  $maincategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maincategory $maincategory)
    {
        //
        $maincategory->title = $request['title'];
        $maincategory->description = $request['description'];
        $maincategory->save();

        return redirect()->action('MaincategoryController@index')->with('correct', 'Product gewijzigd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Maincategory  $maincategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maincategory $maincategory)
    {
        //
        $maincategory->delete();

        return redirect ()->action('MaincategoryController@index')->with('correct', 'Product verwijderd');
    }
}
