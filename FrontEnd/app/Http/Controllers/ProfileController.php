<?php

namespace App\Http\Controllers;


use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($token)
    {
        $client = new Client();
        $requestProfile = $client->get('http://localhost:8000/api/user-info/',[
            'json'=>[
                'token' => $token
            ]
        ]);
        $responseProfile = json_decode($requestProfile->getBody());
        return view('user-profile')->with(['profile'=>$responseProfile]);
    }

    public function upProfile(Request $request, $id)
    {
//        dd($request->picture);
        $client = new Client();
        $picture = $request->picture;
        if($picture!=null){
            $requestProfile = $client->post('http://localhost:8000/api/profile/'.$id,[
                'multipart'=>[
                    [
                        'name'=>'fullname',
                        'contents'=>$request->fullname
                    ],
                    [
                        'name'=>'age',
                        'contents'=>$request->age
                    ],
                    [
                        'name'=>'address',
                        'contents'=>$request->address
                    ],
                    [
                        'name'=>'picture',
                        'contents'=>@fopen($picture->getRealPath(),'r'),
                        'filename'=>$picture->getClientOriginalName()
                    ],
                    [
                        'name'=>'phone',
                        'contents'=>$request->phone
                    ],
                    [
                        'name'=>'token',
                        'contents'=>$request->token
                    ],
                    [
                        'name'=>'oldPicture',
                        'contents'=>$request->oldPicture
                    ],
                    [
                        'name'=>'rating',
                        'contents'=>$request->rating
                    ],
                    [
                        'name'=>'_method',
                        'contents'=>'PUT'
                    ]
                ]
            ]);
        }else{
            $requestProfile = $client->post('http://localhost:8000/api/profile/'.$id,[
                'multipart'=>[
                    [
                        'name'=>'fullname',
                        'contents'=>$request->fullname
                    ],
                    [
                        'name'=>'age',
                        'contents'=>$request->age
                    ],
                    [
                        'name'=>'address',
                        'contents'=>$request->address
                    ],
                    [
                        'name'=>'picture',
                        'contents'=>null
                    ],
                    [
                        'name'=>'phone',
                        'contents'=>$request->phone
                    ],
                    [
                        'name'=>'token',
                        'contents'=>$request->token
                    ],
                    [
                        'name'=>'oldPicture',
                        'contents'=>$request->oldPicture
                    ],
                    [
                        'name'=>'rating',
                        'contents'=>$request->rating
                    ],
                    [
                        'name'=>'_method',
                        'contents'=>'PUT'
                    ]
                ]
            ]);

        }
        $response = json_decode($requestProfile->getBody());
//        dd($response);
        if($response!=null){
            return redirect()->back()->with('message','Completely!');
        }
    }
}
