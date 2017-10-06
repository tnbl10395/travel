<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Response;

class CheckController extends Controller
{
    public function checkMail(Request $request){
        $client = new Client();
        $req = $client->get('http://localhost:8000/api/infoUsers');
        if($req!=''){
            $user = json_decode($req->getBody(),true);
            foreach ($user as $obj){
               if($obj['email']==$request->email){
                    return 'false';
               }
               else{
                   return 'true';
               }
            }

        }
    }
    public function checkUser(Request $request){
        $client = new Client();
        $req = $client->get('http://localhost:8000/api/infoUsers');
        if($req!=''){
            $user = json_decode($req->getBody(),true);
            foreach ($user as $obj){
                if($obj['username']==$request->username){
                    return 'false';
                }
                else{
                    return 'true';
                }
            }

        }
    }
}
