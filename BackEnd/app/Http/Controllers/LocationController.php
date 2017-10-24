<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;
use App\libs\uploadFileLibrary;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $object = new Location();
        $location = $object->join('district','locations.districtID','=','district.districtID')
                           ->select(['locationID','district.districtName','picture','description','map'])
                           ->get();
        return response()->json($location);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return response()->json($request);
        $location = new Location();
        $file = new uploadFileLibrary();
        $location->locationID = $request->locationID;
        $location->districtID = $request->districtID;
        $location->picture = 'http://localhost:8000/upload/'.$file->upload($request->picture);
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
        return response()->json($location);
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
        $file = new uploadFileLibrary();
        $location->locationID = $request->locationID;
        $location->districtID = $request->districtID;
        $location->picture = 'http://localhost:8000/upload/'.$file->reload($request->picture,$request->oldPicture);
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
        $file = new uploadFileLibrary();
        $file->deleteFile($location->picture);
        $location->delete();
        return response()->json(null);
    }

    public function getNameLocation(){
        $location = new Location();
        $list = $location->join('district','locations.districtID','=','district.districtID')
                         ->select(['locationID','districtName'])
                         ->get();
        return response()->json($list);
    }

    public function getAllLocation(){
        $location = new Location();
        $list = $location->join('district','locations.districtID','=','district.districtID')
                         ->select(['*','districtName'])
                         ->get();
        return response()->json($list);
    }

    public function getOneLocation($id){
        $location = new Location();
        $list = $location->where('locationID','=',$id)
            ->join('district','locations.districtID','=','district.districtID')
            ->select(['*','districtName'])
            ->get();
        return response()->json($list);
    }
}
