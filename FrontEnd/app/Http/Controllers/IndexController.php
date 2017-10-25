<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class IndexController extends Controller
{
    public function index(){
        $client = new Client();
        $requestLocation = $client->get('http://localhost:8000/api/location-name');
        $requestTopPlace = $client->get('http://localhost:8000/api/place-top');
        $responseTopPlace = json_decode($requestTopPlace->getBody());
        $responseLocation = json_decode($requestLocation->getBody());
        return view('index')->with(['listLocation'=>$responseLocation,
                                    'listTopPlace'=>$responseTopPlace]);
    }

    public function search(Request $request)
    {
        $client = new Client();
//        if($request->search!=null)
//        {
            $request = $client->post('http://localhost:8000/api/place-search',[
                'json'=>[
                    'locationID'=>$request->location,
                    'search'=>$request->search
                ]
            ]);
            $requestLocation = $client->get('http://localhost:8000/api/location-name');
        $response = json_decode($request->getBody());
        if($response=='[]'){
            return view('seach')->with(['message'=>'Not Found']);
        }
        $responseLocation = json_decode($requestLocation->getBody());
        return view('seach')->with(['result'=>$response,
                                     'listLocation'=>$responseLocation]);
    }

}
