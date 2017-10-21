<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class LocationController extends Controller
{
    public function index(){
        $client = new Client();
        $responseLocation = $client->get('http://localhost:8000/api/location');
        $responseCity = $client->get('http://localhost:8000/api/city');
        $responseDistrict = $client->get('http://localhost:8000/api/district');
        $listLocation = json_decode($responseLocation->getBody());
        $listCity = json_decode($responseCity->getBody());
        $listDistrict = json_decode($responseDistrict->getBody());
        return view('admin.locations')->with(['listLocation'=>$listLocation,
                                              'listCity'=>$listCity,
                                              'listDistrict'=>$listDistrict]);
    }

    public function store(Request $request){
        $cityID = "0".$request->cityID;
        $districtID = "0".$request->districtID;
        $locationID = $cityID.$districtID;
        $description = $request->description;
        $picture = $request->picture;
        $map = 'not thing!';
        $client = new Client();
        $req = $client->post('http://localhost:8000/api/location',[
            'multipart'=>[
                [
                    'name'=>'locationID',
                    'contents'=>$locationID
                ],
                [
                    'name'=>'districtID',
                    'contents'=>$districtID
                ],
                [
                    'name'=>'picture',
                    'contents'=>@fopen($picture->getRealPath(),'r'),
                    'filename'=>$picture->getClientOriginalName()
                ],
                [
                    'name'=>'description',
                    'contents'=>$description
                ],
                [
                    'name'=>'map',
                    'contents'=>$map
                ]
            ]
        ]);
//        dd($req);
        $response = json_decode($req->getBody());
        if($response!=null){
            return redirect()->back();
        }
    }

    public function delete($id){
//        dd($id);
        $client = new Client();
        $req = $client->delete('http://localhost:8000/api/location/'.$id);
        $response = json_decode($req->getBody());
        if($response!=null){
            return redirect()->back();
        }
    }
}
