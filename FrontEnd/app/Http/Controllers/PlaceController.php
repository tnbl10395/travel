<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index()
    {

    }

    public function detailPage($id)
    {
        $client = new Client();
        $requestPlace = $client->get('http://localhost:8000/api/place/'.$id);
        $requestImage = $client->get('http://localhost:8000/api/image-place/'.$id);
        $requestComment = $client->get('http://localhost:8000/api/comment-get-place/'.$id);
        $requestCountComment = $client->get('http://localhost:8000/api/comment-count/'.$id);
        $requestMoreInformation = $client->get('http://localhost:8000/api/place-moreinfo/'.$id);
        $requestPlaceMap = $client->get('http://localhost:8000/api/place-way/'.$id);
        $responsePlaceMap = json_decode($requestPlaceMap->getBody());
        $responseMoreInformation = json_decode($requestMoreInformation->getBody());
        $responseCountComment = json_decode($requestCountComment->getBody());
        $responseComment = json_decode($requestComment->getBody());
        $responseImage = json_decode($requestImage->getBody());
        $responsePlace = json_decode($requestPlace->getBody());
        return view('list_topic')->with(['onePlace'=>$responsePlace,
                                         'getImage'=>$responseImage,
                                         'getComment'=>$responseComment,
                                         'count'=>$responseCountComment,
                                         'moreInfo'=>$responseMoreInformation,
                                        'address'=>$responsePlaceMap]);
    }
}
