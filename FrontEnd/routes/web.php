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
Route::get('place', function(){
	return view('place');
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
Route::get('user_profile',function(){
	return view ('user-profile');
});
// ------------------------------------------------------------------------------------------------------------
// Resolve register and login controller
// ------------------------------------------------------------------------------------------------------------
Route::post('login-user','AuthController@login');
Route::get('logout','AuthController@logout');
Route::post('register','AuthController@register');
Route::get('get-info','InfoUserController@getInfo');
// ------------------------------------------------------------------------------------------------------------
// Controller check email
// ------------------------------------------------------------------------------------------------------------
Route::get('checkMail','CheckController@checkMail');
Route::get('checkUser','CheckController@checkUser');
// ------------------------------------------------------------------------------------------------------------
// Resolve register and login Admin controller
// ------------------------------------------------------------------------------------------------------------
//Auth::routes();
Route::get('admin-login','Admin\AuthAdminController@showLoginForm');
Route::post('login','Admin\AuthAdminController@login');
Route::get('logout-admin','Admin\AuthAdminController@logout');
// ------------------------------------------------------------------------------------------------------------
// Admin page
// ------------------------------------------------------------------------------------------------------------
Route::get('admin','Admin\AdminController@index');
/**
 * Location
 * */
Route::get('admin/location-index','Admin\LocationController@index');
Route::post('admin/location-add','Admin\LocationController@store');
Route::get('admin/location-delete/{id}','Admin\LocationController@delete');
/**
 * Category
**/
Route::get('admin/category-index','Admin\CategoryController@index');
Route::post('admin/category-add','Admin\CategoryController@addCategory');
Route::post('admin/category-delete/{id}','Admin\CategoryController@destroy');
Route::post('admin/create-category','Admin\CreateCategoryAdminController@createTable');
/**
 * Place
 **/
Route::get('admin/place-index','Admin\PlaceController@index');
/**
 * Comment
 **/
Route::get('admin/comment-index','Admin\CommentController@index');
/**
 * Image
 **/
Route::get('admin/image-index','Admin\ImageController@index');
/**
 * User
 **/
Route::get('admin/user-index','Admin\UserController@index');
Route::post('admin/user-un-lock/{attr}','Admin\UserController@lockOrUnLock');


