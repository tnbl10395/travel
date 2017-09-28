<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $location = new Location();
        return response()->json($location::all());
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
        //
        $file = $request->picture;
        $namePicture = 'pic-'.$file->getClientOriginalName();
        $file->move('upload',$namePicture);
        $location = new Location();
        $location->locationName = $request->locationName;
        $location->picture = 'http://localhost:8000/upload/'.$namePicture;
        $location->description = $request->description;
        $location->map = $request->map;
        $location->save();
        return response()->json($location,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        //
        return response()->json($location);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        if($request->hasFile('picture')) {
            $file = $request->picture;
            $name = 'pic-'.$file->getClientOriginalName();
            $nameOldPicture = strstr($request->oldPicture,'pic-');
            unlink('upload/'.$nameOldPicture);
            $file->move('upload',$name);
            $namePicture = 'http://localhost:8000/upload/'.$name;
        }
        else{
            $namePicture = $request->oldPicture;
        }
        $location->locationName = $request->locationName;
        $location->picture = $namePicture;
        $location->description = $request->description;
        $location->map = $request->map;
        $location->save();
        return response()->json($location,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        //
        $picture = $location->picture;
        $objDelete = strstr($picture,'pic-');
        unlink('upload/'.$objDelete);
        $location->delete();

        return response()->json('Successful!',204);
    }
}
