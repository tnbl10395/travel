<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotel = new Hotel();
        return response()->json($hotel::all());
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
        $hotel = new Hotel();
        $hotel->hotelName = $request->hotelName;
        $hotel->locationID = $request->locationID;
        $hotel->cost = $request->cost;
        $hotel->description = $request->description;
        $hotel->detail = $request->detail;
        $hotel->address = $request->address;
        $hotel->phone = $request->phone;
        $hotel->map = $request->map;
        $hotel->rating = $request->rating;
        $hotel->save();
        return response()->json($hotel,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        return response()->json($hotel,404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        $hotel->hotelName = $request->hotelName;
        $hotel->locationID = $request->locationID;
        $hotel->cost = $request->cost;
        $hotel->description = $request->description;
        $hotel->detail = $request->detail;
        $hotel->address = $request->address;
        $hotel->phone = $request->phone;
        $hotel->map = $request->map;
        $hotel->rating = $request->rating;
        $hotel->save();
        return response()->json($hotel,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return response()->json('Successful!',204);
    }
}
