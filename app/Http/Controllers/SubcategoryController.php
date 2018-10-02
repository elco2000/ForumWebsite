<?php

namespace App\Http\Controllers;

use App\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subcategories = Subcategory::all();
        return view ('subcategories.index', compact('subcategories') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('subcategories.create');
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
        $subcategory = new Subcategory();
        $subcategory->title = $request['title'];
        $subcategory->description = $request['description'];
        $subcategory->save();

        return redirect()->action('SubcategoryController@index')->with('correct', 'Sub category aangemaakt');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        //
        return view('subcategories.show', compact('subcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {
        //
        return view('subcategories.edit', compact('subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        //
        $subcategory->title = $request['title'];
        $subcategory->description = $request['description'];
        $subcategory->save();

        return redirect()->action('SubcategoryController@index')->with('correct', 'Sub category gewijzigd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory)
    {
        //
        $subcategory->delete();

        return redirect ()->action('SubcategoryController@index')->with('correct', 'Product verwijderd');
    }
}
