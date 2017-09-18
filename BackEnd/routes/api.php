<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('location','LocationController',['except'=>['create','edit']]);
// Route::get('location','LocationController@index');
// Route::get('location/create','LocationController@create');
// Route::post('location/store','LocationController@store');
// Route::get('location/{location}','LocationController@show');
// Route::get('location/{location}/edit','LocationController@edit');
// Route::put('location/{location}/update','LocationController@update');
// Route::delete('location/delete/{location}','LocationController@destroy');