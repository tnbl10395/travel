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
Route::get('locations', function(){
	return view('locations');
});
Route::get('contact', function(){
	return view('contact');
});
Route::get('register', function(){
	return view('register');
});
// Route::get('submit', function(){
// 	return view('submit-property');
// });
Route::get('grid_layout', function(){
	return view('grid_layout');
});
Route::get('detail_location', function(){
	return view('detail_location');
});
Route::get('list_topic', function(){
	return view('list_topic');
});
// -------------------------------------------------------------
// Resolve register and login controller
Route::get('register', 'AuthController@login');