<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\libs\Prefix;

class IndexController extends Controller
{
    public function link(){
        $prefix = new Prefix();
        $link = $prefix->setPrefix();
        return $link;
    }

    public function index(){
        $client = new Client();
        $requestLocation = $client->get($this->link().'api/location-name');
        $requestTopPlace = $client->get($this->link().'api/place-top');
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
            $request = $client->post($this->link().'api/place-search',[
                'json'=>[
                    'locationID'=>$request->location,
                    'search'=>$request->search
                ]
            ]);
            $requestLocation = $client->get($this->link().'api/location-name');
        $response = json_decode($request->getBody());
        if($response=='[]'){
            return view('seach')->with(['message'=>'Not Found']);
        }
        $responseLocation = json_decode($requestLocation->getBody());
        return view('seach')->with(['result'=>$response,
                                     'listLocation'=>$responseLocation]);
    }

}
