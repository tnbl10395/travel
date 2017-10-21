<?php

namespace App\Http\Controllers\Admin;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        $client = new Client();
        $req = $client->get('http://localhost:8000/api/allUsers');
        $response = json_decode($req->getBody());
        return view('admin.accounts')->with(['listUser'=>$response]);
    }

    public function lockOrUnLock($attr){
        $str = explode('-',$attr);
        if($str['1']==1){
            $status = 0;
        }else{
            $status = 1;
        }
        $client = new Client();
        $req = $client->post('http://localhost:8000/api/user-un-lock/'.$str['0'],[
            'json'=>[
                'status'=>$status,
                '_method'=>'PUT'
            ]
        ]);
        return redirect()->back();
    }
}
