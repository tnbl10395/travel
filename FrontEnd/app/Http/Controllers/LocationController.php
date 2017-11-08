<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\libs\Prefix;

class LocationController extends Controller
{
    public function link(){
        $prefix = new Prefix();
        $link = $prefix->setPrefix();
        return $link;
    }

    public function index()
    {
        $client = new Client();
        $requestLocation = $client->get($this->link().'api/location-all');
        $responseLocation = json_decode($requestLocation->getBody());
        return view('locations')->with(['listLocation'=>$responseLocation]);
    }

    public function detailPage($id)
    {
        $client = new Client();
        $requestLocationAll = $client->get($this->link().'api/location-all');
        $requestLocation = $client->get($this->link().'api/location-one/'.$id);
        $requestCategory = $client->get($this->link().'api/category');
        $requestPlace = $client->get($this->link().'api/place-show/'.$id);
        $requestPlaceMap = $client->get($this->link().'api/place-map/'.$id);
        $responsePlaceMap = json_decode($requestPlaceMap->getBody());
        $responseLocationAll = json_decode($requestLocationAll->getBody());
        $responseLocation = json_decode($requestLocation->getBody());
        $responseCategory = json_decode($requestCategory->getBody());
        $responsePlace = json_decode($requestPlace->getBody());
//        dd($responsePlace);
//        $responseImage = json_decode($requestImage->getBody());
        return view('detail_location')->with(['oneLocation'=>$responseLocation,
                                              'listCategory'=>$responseCategory,
                                              'listPlace'=>$responsePlace,
                                              'listLocation'=>$responseLocationAll,
                                               'listWaypoint'=>$responsePlaceMap]);
    }
}
