<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Mockery\Exception;

class ProfileController extends Controller
{
    public function index(){

        $client = new Client();
        $req = $client->get('http://localhost:8000/api/allUsers');
        $response = json_decode($req->getBody());
        return view('admin.accounts')->with(['listUser'=>$response]);
    }
    public function updateAccount(Request $request){
    	$firtsname = $request->firstname;
    	$lastname = $request->lastname;
    	$email = $request->email;
        $phone = $request->phone;
        $address = $request->address;
        $age = $request->age;
        $client = new Client();
        $req = $client->post('http://localhost:8000/api/profile',[
            'json' => [
                'firtsname'=>$firtsname,
                'lastname'=>$lastname,
                'email'=>$email,
                'phone'=>$phone,
                'address'=>$address,
                'age'=>$age, 
            ]
        ]);
       $response = json_decode($req->getBody());
       return \Redirect::back()->with('message', 'Successfully!');


    }
    
}
