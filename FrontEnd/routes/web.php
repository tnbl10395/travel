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
Route::get('blog',function(){
	return view('blog');
});
Route::get('list_topic', function(){
	return view('list_topic');
});
// ------------------------------------------------------------------------------------------------------------
// Resolve register and login controller
// ------------------------------------------------------------------------------------------------------------
Route::post('login','AuthController@login');
Route::get('logout','AuthController@logout');
Route::post('register','AuthController@register');
// ------------------------------------------------------------------------------------------------------------
// Controller check email
// ------------------------------------------------------------------------------------------------------------
Route::get('checkMail','CheckController@checkMail');
Route::get('checkUser','CheckController@checkUser');
// ------------------------------------------------------------------------------------------------------------
// Admin page
// ------------------------------------------------------------------------------------------------------------
Route::get('Admin',function(){
	return view('admin.indexAdmin');
});
Route::get('locations_Admin',function(){
	return view('admin.locations');
});
Route::get('hotels_Admin',function(){
	return view('admin.hotels');
});
Route::get('restaurants_Admin',function(){
	return view('admin.Restaurant');
});
Route::get('touristAttractions_Admin',function(){
	return view('admin.TouristAttractions');
});
Route::get('comments_Admin',function(){
	return view('admin.Comments');
});
Route::get('img_Admin',function(){
	return view('admin.Img');
});
Route::get('accounts_Admin',function(){
	return view('admin.accounts');
});

