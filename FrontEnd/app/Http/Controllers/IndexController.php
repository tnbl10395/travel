<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class IndexController extends Controller
{
    public function index(){
        $client = new Client();
        $requestLocation = $client->get('http://localhost:8000/api/location-name');
        $responseLocation = json_decode($requestLocation->getBody());
        return view('index')->with(['listLocation'=>$responseLocation]);
    }

}
