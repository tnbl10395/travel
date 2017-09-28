<?php

namespace App\Http\Controllers;

use App\TouristAttraction;
use Illuminate\Http\Request;

class TouristAttractionlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $touristAttraction = new TouristAttraction();
        return response()->json($touristAttraction::all());
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
        $touristAttraction = new TouristAttraction();
        $touristAttraction->touristAttractionName = $request->touristAttractionName;
        $touristAttraction->locationName = $request->locationName;
        $touristAttraction->description = $request->description;
        $touristAttraction->detail = $request->detail;
        $touristAttraction->map = $request->map;
        $touristAttraction->rating = $request->rating;
        $touristAttraction->save();
        return response()->json($touristAttraction,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TouristAttraction  $touristAttraction
     * @return \Illuminate\Http\Response
     */
    public function show(TouristAttraction $touristAttraction)
    {
        return response()->json($touristAttraction,404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TouristAttraction  $touristAttraction
     * @return \Illuminate\Http\Response
     */
    public function edit(TouristAttraction $touristAttraction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TouristAttraction  $touristAttraction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TouristAttraction $touristAttraction)
    {
        $touristAttraction->touristAttractionName = $request->touristAttractionName;
        $touristAttraction->locationName = $request->locationName;
        $touristAttraction->description = $request->description;
        $touristAttraction->detail = $request->detail;
        $touristAttraction->map = $request->map;
        $touristAttraction->rating = $request->rating;
        $touristAttraction->save();
        return response()->json($touristAttraction,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TouristAttraction  $touristAttraction
     * @return \Illuminate\Http\Response
     */
    public function destroy(TouristAttraction $touristAttraction)
    {
        $touristAttraction->delete();
        return response()->json(null,404);
    }
}
