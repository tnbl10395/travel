<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class LocationController extends Controller
{
    public function insert(Request $request){
        $locationName = $request->txtLocationName;
        $picture = $request->txtPicture;
        $description = $request->txtDescription;
        $map = $request->txtMap;
        $obj = array([
            'locationName'=>$locationName,
            'picture'=>$picture,
            'description'=>$description,
            'map'=>$map
        ]);
        dd($obj);
        $json = json_encode($obj);
        $client = new Client();

    }
}
