<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $rules = [
            'username'=>'alpha',
            'password'=>'min:6|max:20'
        ];
        $message = [
            'password.min'=>'Your password is from 6 to 20 characters',
            'password.max'=>'Your password is from 6 to 20 characters'
        ];
        $validate = \Validator::make($request->all(),$rules,$message);
        if($validate->fails()){
            return redirect()->back()->withErrors($validate);
        }else{
            $username = $request->username;
            $password = $request->password;
            $client = new Client();
            $req = $client->post('http://localhost:8000/api/auth/login',[
                'json' => [
                    'username' => $username,
                    'password' => $password,
                ]
            ]);
            $response = $req->getBody();
            if($response!='invalid_username_or_password'){
                $res = json_decode($response);
                $token = $res->token;
                Session::put('user.username',$username);
                Session::put('user.token',$token);
                return redirect('/');
            }else{
                $errors = new MessageBag(['errorLogin'=>'Username or Password is uncorrect!']);
                return back()->withInput()->withErrors($errors);
            }

        }
    }
    public function logout(){
        Session::forget('user');
        return redirect('/');
    }
}
