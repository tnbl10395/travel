<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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
        return $location::all();
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
        $location = new Location();
//        $location->locationName = $request->txtLocationName;
//        $picture = $request->photo;
//        if($request->hasFile('photo')){
//            $namePicture = $picture->getClientOriginalName();
//            $picture->move('upload',$namePicture);
//            $location->picture = $picture;
//        }
//        $location->description =  $request->txtDescription;
//        $location->map = $request->txtMap;
        $location->locationName = Input::get('locationName');
        dd($location);
        $location->picture = Input::get('picture');
        $location->description = Input::get('description');
        $location->map = Input::get('map');
        $location->save();
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
        $objLocation = new Location();
        return $objLocation::findOrFail($location);
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
        //
        $objLocation = new Location();
        $picture = $request->photo;
        if($request->hasFile('photo')){
            $namePicture = $picture->getClientOriginalName();
            $picture->move('upload',$namePicture);
        }
        $objLocation->findOrFail($location)
                                    ->update(['locationName'=>$request->txtLocationName,
                                              'picture'=>$picture,
                                              'description'=>$request->txtDescription,
                                              'map'=>$request->txtMap]);
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
        $objLocation = new Location();
        $objDestroy = $objLocation::findOrFail($location);
        $objDestroy->delete();
    }
}
