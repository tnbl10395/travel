<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class LocationController extends Controller
{
    public function insert(Request $request){
        $locationName = $request->txtLocationName;
        $picture = $request->filePicture;
        $description = $request->txtDescription;
        $map = $request->txtMap;
        $client = new Client();
        $req = $client->post('http://localhost:8000/api/location',[
                'multipart'=>[
                    [
                        'name'=>'picture',
                        'contents'=>@fopen($picture->getRealPath(),'r'),
                        'filename'=>'pic-'.$picture->getClientOriginalName()
                    ],
                    [
                        'name'=>'locationName',
                        'contents'=>$locationName,
                    ],
                    [
                        'name'=>'description',
                        'contents'=>$description,
                    ],
                    [
                        'name'=>'map',
                        'contents'=>$map,
                    ]
                ]
            ]);
        if(!empty($req)) return redirect('location');

    }
    public function delete($locationID){
        $client = new Client();
        $req = $client->delete('http://localhost:8000/api/location/'.$locationID);
        return redirect('location');
    }
}
