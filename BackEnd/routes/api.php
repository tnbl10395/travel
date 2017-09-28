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
Route::resource('hotel','HotelController',['except'=>['create','edit']]);
Route::resource('restaurant','RestaurantController',['except'=>['create','edit']]);
Route::resource('touristAttraction','TouristAttractionController',['except'=>['create','edit']]);
Route::resource('comment','CommentController',['except'=>['create','edit']]);
Route::resource('account','LocationController',['except'=>['create','edit']]);