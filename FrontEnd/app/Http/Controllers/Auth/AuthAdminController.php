<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\MessageBag;

class AuthAdminController extends Controller
{
//    use AuthenticatesUsers;

//    protected $redirectTo = '/';

//    public function __construct()
//    {
//        $this->middleware('guest')->except('logout');
//    }

    public function showLoginForm(){
        return view('admin.login');
    }
    public function login(Request $request){
        $username = $request->username;
        $password = $request->password;
        $client = new Client();
        $req = $client->post("http://localhost:8000/api/auth/login",[
            "json"=>[
                'username'=>$username,
                'password'=>$password
            ]
        ]);
        $response = $req->getBody();
        $res = json_decode($response);
        if($res!='invalid_username_or_password'){
//            \Auth::attempt(['username'=>$username,'password'=>$password]);
            $token = $res->token;
            Session::put('admin.username',$username);
            Session::put('admin.token',$token);
            Session::save();
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
