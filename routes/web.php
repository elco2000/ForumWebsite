<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::resource('/maincategories', 'MaincategoryController');
Route::get('/maincategories', 'MaincategoryController@index');
Route::get('/maincategories/create', 'MaincategoryController@create');
Route::get('/maincategories/{maincategory}', 'MaincategoryController@show');
Route::get('/maincategories/{maincategory}/edit', 'MaincategoryController@edit');

Route::resource('/subcategories', 'SubcategoryController');
Route::get('/subcategories', 'SubcategoryController@index');
Route::get('/subcategories/create', 'SubcategoryController@create');
Route::get('/subcategories/{subcategory}', 'SubcategoryController@show');
Route::get('/subcategories/{subcategory}/edit', 'SubcategoryController@edit');