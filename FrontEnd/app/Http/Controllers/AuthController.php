<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use Mockery\Exception;
use App\libs\Prefix;

class AuthController extends Controller
{
    public function link(){
        $prefix = new Prefix();
        $link = $prefix->setPrefix();
        return $link;
    }

    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $client = new Client();
        $req = $client->post($this->link().'api/auth/login',[
            'json' => [
                'username' => $username,
                'password' => $password,
                'role' => 0
            ]
        ]);
        $response = $req->getBody();
        $res = json_decode($response);
        if($res!="invalid_username_or_password"){
            $token = $res->token;
            Session::put('user.username',$username);
            Session::put('user.token',$token);
            Session::save();
            \Cookie::queue('username',$username);
            return redirect('/');
        }else{
            $errors = new MessageBag(['errorLogin'=>'Username or Password is uncorrect!']);
            return back()->withInput()->withErrors($errors);
        }
    }
    public function logout(){
        Session::forget('user');
        return redirect('/');
    }
    public function register(Request $request){
        $username = $request->username;
        $email = $request->email;
        $password = $request->password;
        $client = new Client();
        $req = $client->post($this->link().'api/auth/register',[
            'json'=>[
                'username'=>$username,
                'email'=>$email,
                'password'=>$password,
                'role'=>0
            ]
        ]);
        $response = $req->getBody();
        try{
            $this->login($request);
            return redirect('/');
        }catch(Exception $e){
        }


    }
}
