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
});

Route::resource('location','LocationController',['except' => ['create','edit']]);
Route::resource('hotel','HotelController',['except' => ['create','edit']]);
Route::resource('restaurant','RestaurantController',['except' => ['create','edit']]);
Route::resource('touristAttraction','TouristAttractionlController',['except'=>['create','edit']]);
Route::resource('comment','CommentController',['except' => ['create','edit']]);
Route::resource('account','LocationController',['except' => ['create','edit']]);
Route::resource('image','ImageController',['except' => ['create','edit']]);