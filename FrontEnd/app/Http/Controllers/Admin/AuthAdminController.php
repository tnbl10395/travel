<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\MessageBag;
use App\libs\Prefix;

class AuthAdminController extends Controller
{
    public function link(){
        $prefix = new Prefix();
        $link = $prefix->setPrefix();
        return $link;
    }

    public function showLoginForm(){
        return view('admin.login');
    }
    public function login(Request $request){
        $username = $request->username;
        $password = $request->password;
        $client = new Client();
        $req = $client->post($this->link()."api/auth/login",[
            "json"=>[
                'username'=>$username,
                'password'=>$password,
                'role'=>1
            ]
        ]);
        $response = $req->getBody();
        $res = json_decode($response);
        if($res!='invalid_username_or_password'){
            $token = $res->token;
            Session::put('admin.username',$username);
            Session::put('admin.token',$token);
            Session::save();
            \Cookie::queue('username',$username);
            return redirect()->intended('/admin');
        }else{
            $errors = new MessageBag(['errorLogin'=>'Username or Password is uncorrect!']);
            return back()->withInput()->withErrors($errors);
        }
    }
    public function logout(){
        Session::forget('admin');
        return redirect('/admin-login');
    }
}
