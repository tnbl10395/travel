<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function insert(){
//        $request = new Request();
//        $locationName = $request->txtLocationName;
//        $picture = $request->txtPicture;
//        $description = $request->txtDescription;
//        $map = $request->txtMap;
//        dd($locationName);
//        $obj = array([
//            'locationName'=>$locationName,
//            'picture'=>$picture,
//            'description'=>$description,
//            'map'=>$map
//        ]);
//        $client = new GuzzleHttp/Client();
//        $req = $client->post('http://locahost:2000/api/location',[
//            'form_param'=>[
//                'locationName'=>$locationName,
//                'picture'=>$picture,
//                'description'=>$description,
//                'map'=>$map
//            ]
//        ]);
        return view('index');
    }
}
