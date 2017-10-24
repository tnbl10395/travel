<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PlaceController extends Controller
{
    public function index()
    {
        $client = new Client();
        $requestLocation = $client->get('http://localhost:8000/api/location-all');
        $requestPlace = $client->get('http://localhost:8000/api/place-all');
        $responsePlace = json_decode($requestPlace->getBody());
        $responseLocation = json_decode($requestLocation->getBody());
        return view('place')->with(['listLocation'=>$responseLocation,
                                    'listPlace'=>$responsePlace]);
    }

    public function detailPage($id)
    {
        $client = new Client();
        $requestPlace = $client->get('http://localhost:8000/api/place/'.$id);
        $requestImage = $client->get('http://localhost:8000/api/image-place/'.$id);
        $requestComment = $client->get('http://localhost:8000/api/comment-get-place/'.$id);
        $requestCountComment = $client->get('http://localhost:8000/api/comment-count/'.$id);
        $requestMoreInformation = $client->get('http://localhost:8000/api/place-moreinfo/'.$id);
        $requestEvaluate = $client->get('http://localhost:8000/api/evaluate/'.$id,[
            'json'=>[
                'token'=>Session::get('user.token')
            ]
        ]);
        $responseEvaluate = json_decode($requestEvaluate->getBody());
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
                                        'address'=>$responsePlaceMap,
                                         'rating'=>$responseEvaluate]);
    }

    public function sendComment(Request $request){
        $client = new Client();
        $req = $client->post('http://localhost:8000/api/comment',[
            'json'=>[
                'token'=>$request->token,
                'content'=>$request->content,
                'placeID'=>$request->placeID,
            ]
        ]);
        $response = json_decode($req->getBody());
        if($response!=null){
            return redirect()->back();
        }
    }

    public function sendRating(Request $request)
    {
        $client = new Client();
        $req = $client->post('http://localhost:8000/api/evaluate',[
            'json'=>[
                'token'=>$request->token,
                'placeID'=>$request->placeID,
                'rating'=>$request->rating
            ]
        ]);
        $response = json_decode($req->getBody());
        return $response;
    }

}
