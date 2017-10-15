<?php

namespace App\Http\Controllers;

use App\Evaluate;
use App\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $place = new Place();
        return response()->json($place::all(),404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $place = new Place();
        $place->categoryID = $request->categoryID;
        $place->placeName = $request->placeName;
        $place->description = $request->description;
        $place->detail = $request->detail;
        $place->map = $request->map;
        $place->rating = $request->rating;
        $place->save();
        return response()->json($place,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {
        return response()->json($place,404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place)
    {
        $place->categoryID = $request->categoryID;
        $place->placeName = $request->placeName;
        $place->description = $request->description;
        $place->detail = $request->detail;
        $place->map = $request->map;
        $place->rating = $request->rating;
        $place->save();
        return response()->json($place,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        $place->delete();
        return response()->json(null,404);
    }

}
