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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::post('auth/register', 'UserController@register');
Route::post('auth/login', 'UserController@login');
Route::group(['middleware' => 'jwt.auth'], function (){
    Route::get('user-info', 'UserController@getUserInfo');
    Route::post('comment','CommentController@store');
    Route::get('evaluate','EvaluateController@index');
    Route::get('evaluate/{evaluate}','EvaluateController@show');
    Route::post('evaluate','EvaluateController@store');
    Route::put('evaluate/{evaluate}','EvaluateController@update');
});
//--------------------------------------------------------------------------------------------------
//location                                                                                         |
//--------------------------------------------------------------------------------------------------
Route::get('location','LocationController@index');
Route::get('location/{location}','LocationController@show');
Route::post('location','LocationController@store');
Route::put('location/{location}','LocationController@update');
Route::delete('location/{location}','LocationController@destroy');
//--------------------------------------------------------------------------------------------------
//category                                                                                         |
//--------------------------------------------------------------------------------------------------
Route::get('category','CategoryController@index');
Route::get('category/{category}','CategoryController@show');
Route::post('category','CategoryController@store');
Route::put('category/{category}','CategoryController@update');
Route::delete('category/{category}','CategoryController@destroy');
//--------------------------------------------------------------------------------------------------
//place                                                                                         |
//--------------------------------------------------------------------------------------------------
Route::get('place','PlaceController@index');
Route::get('place/{place}','PlaceController@show');
Route::post('place','PlaceController@store');
Route::put('place/{place}','PlaceController@update');
Route::delete('place/{place}','PlaceController@destroy');
//--------------------------------------------------------------------------------------------------
//comment                                                                                         |
//--------------------------------------------------------------------------------------------------
Route::get('comment','CommentController@index');
Route::get('comment/{comment}','CommentController@show');
Route::put('comment/{comment}','CommentController@update');
Route::delete('comment/{comment}','CommentController@destroy');
//--------------------------------------------------------------------------------------------------
//profile                                                                                         |
//--------------------------------------------------------------------------------------------------
Route::get('profile','ProfileController@index');
Route::get('profile/{profile}','ProfileController@show');
Route::post('profile','ProfileController@store');
Route::put('profile/{profile}','ProfileController@update');
Route::delete('profile/{profile}','ProfileController@destroy');
//--------------------------------------------------------------------------------------------------
//evaluate                                                                                         |
//--------------------------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------------------
//image                                                                                            |
//--------------------------------------------------------------------------------------------------
Route::get('image','ImageController@index');
Route::get('image/{image}','ImageController@show');
Route::post('image','ImageController@store');
Route::put('image/{image}','ImageController@update');
Route::delete('image/{image}','ImageController@destroy');
//--------------------------------------------------------------------------------------------------
//user                                                                                            |
//--------------------------------------------------------------------------------------------------
Route::get('infoUsers','UserController@getAllUser');