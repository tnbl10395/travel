<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class AuthController extends Controller
{
    public function login(Request $request)
    {
        echo "h";
//        $username = $request->username;
//        $password = $request->password;
//    	$client = new Client();
//    	$req = $client->post('http://localhost:8000/api/auth/login',[
//    	    'json' => [
//    	        'username' => $username,
//                'password' => $password,
//            ]
//        ]);
//        return redirect('/');
    }
}
