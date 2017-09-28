<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurant = new Restaurant();
        return response()->json($restaurant::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $restaurant = new Restaurant();
        $restaurant->restaurantName = $request->restaurantName;
        $restaurant->locationID = $request->locationID;
        $restaurant->description = $request->description;
        $restaurant->detail = $request->detail;
        $restaurant->address = $request->address;
        $restaurant->phone = $request->phone;
        $restaurant->rating = $request->rating;
        $restaurant->save();
        return response()->json($restaurant,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        return response()->json($restaurant,404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        $restaurant->restaurantName = $request->restaurantName;
        $restaurant->locationID = $request->locationID;
        $restaurant->description = $request->description;
        $restaurant->detail = $request->detail;
        $restaurant->address = $request->address;
        $restaurant->phone = $request->phone;
        $restaurant->rating = $request->rating;
        $restaurant->save();
        return response()->json($restaurant,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();
        return response()->json(null,404);
    }
}
