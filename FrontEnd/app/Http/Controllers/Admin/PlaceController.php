<?php

namespace App\Http\Controllers\Admin;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\libs\Prefix;

class PlaceController extends Controller
{
    public function link(){
        $prefix = new Prefix();
        $link = $prefix->setPrefix();
        return $link;
    }

    public function index(){
        $client = new Client();
        $requestCategory = $client->get($this->link().'api/category');
        $listCategory = json_decode($requestCategory->getBody());
        return view('admin.place')->with(['listCategory'=>$listCategory]);
    }

    public function createPlaceTable($category){
        $client = new Client();
        $req = $client->get($this->link().'api/place-table/'.$category);
        $listPlace = json_decode($req->getBody());
        return view('admin.setTablePlace')->with(['listPlace'=>$listPlace]);
    }

    public function getPlaceBasedOnCategory($category){
        $client = new Client();
        $req = $client->get($this->link().'api/place-get/'.$category);
        $listPlace = json_decode($req->getBody());
        return $listPlace;
    }

    public function delete($id){
        $client = new Client();
        $req = $client->delete($this->link().'api/place/'.$id);
        $response = json_decode($req->getBody());
        if($response==null){
            return redirect()->back();
        }
    }

    public function showPage(){
        $client = new Client();
        $requestLocation = $client->get($this->link().'api/location');
        $requestCategory = $client->get($this->link().'api/category');
        $listLocation = json_decode($requestLocation->getBody());
        $listCategory = json_decode($requestCategory->getBody());
        return view('admin.addPlace')->with(['listLocation'=>$listLocation,
                                             'listCategory'=>$listCategory]);
    }

    public function store(Request $request){
        $restOfObject = $request->except(['location','category','placeName','_token',
            'address','waypoint','description','detail','submit',
            'picture1','picture2','picture3','picture4']);
        $locationID = $request->location;
        $category = explode('%',$request->category);
        $categoryID = $category[0];
        $placeName = $request->placeName;
        $address = $request->address;
        $waypoint  = $request->waypoint;
        $description = $request->description;
        $detail = $request->detail;
        $client = new Client();
        $requestPlace = $client->post($this->link().'api/place',[
            'json'=>[
                'locationID'=>$locationID,
                'categoryID'=>$categoryID,
                'placeName'=>$placeName,
                'address'=>$address,
                'waypoint'=>$waypoint,
                'description'=>$description,
                'detail'=>$detail,
            ]
        ]);
        $objectPlace = json_decode($requestPlace->getBody());
        if($objectPlace!=null){
            $objectRestOfPlace = $this->storeRestOfObject($restOfObject,$client,$request->category,$placeName);
//            dd($objectRestOfPlace);
            $objectImage = $this->upload($client,$request->picture1,$request->picture2,$request->picture3,$request->picture4,$placeName);
            if($objectImage!=null&&$objectRestOfPlace==true){
                return \Redirect::back()->with('message', 'Successfully!');
            }
        }
    }

    public function storeRestOfObject($array,$client,$category,$placeName){
        $list = array_values($array);
//        dd($list);
        $request = $client->post($this->link().'api/store-rest-place',[
            'json'=>[
                'placeName'=>$placeName,
                'category'=>$category,
                'list'=>$list
            ]
        ]);
        $response = json_decode($request->getBody());
        return $response;

    }

    public function upload($client,$pic1,$pic2,$pic3,$pic4,$placeName){
        $requestImage = $client->post($this->link().'api/images',[
            'multipart'=>[
                [
                    'name'=>'placeName',
                    'contents'=>$placeName
                ],
                [
                    'name'=>'picture1',
                    'contents'=>@fopen($pic1->getRealPath(),'r'),
                    'filename'=>$pic1->getClientOriginalName()
                ],
                [
                    'name'=>'picture2',
                    'contents'=>@fopen($pic2->getRealPath(),'r'),
                    'filename'=>$pic2->getClientOriginalName()
                ],
                [
                    'name'=>'picture3',
                    'contents'=>@fopen($pic3->getRealPath(),'r'),
                    'filename'=>$pic3->getClientOriginalName()
                ],
                [
                    'name'=>'picture4',
                    'contents'=>@fopen($pic4->getRealPath(),'r'),
                    'filename'=>$pic4->getClientOriginalName()
                ],
            ]
        ]);
        $responseImage = json_decode($requestImage->getBody());
        return $responseImage;
    }
}
