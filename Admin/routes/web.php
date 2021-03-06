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
    return view('index');
});
Route::get('location',function (){
   return view('location.index');
});
Route::get('location/insert',function (){
    return view('location.insert');
});
Route::post('location/insert/obj','LocationController@insert');
Route::get('location/update/{locationID}','LocationController@update');
Route::put('location/updated/{locationID}','LocationController@updated');
Route::get('location/delete/{locationID}','LocationController@delete');