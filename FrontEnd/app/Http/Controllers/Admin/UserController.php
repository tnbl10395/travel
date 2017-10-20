<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
class UserController extends Controller
{	
	public function __construct()
    {
        $this->middleware('admin');
    }
   
    public function index(){
    	$client = new Client();
    	$req = $client->get('http://127.0.0.1:8000/api/profile');
    	$users = json_decode($req->getBody());

    	return view('admin.accounts')->with(['data'=>$users]);
    }
    // public function deleteUser(Request $request){
    // 	$userID = $request->userID;
    // 	$client = new Client();
    // 	$req =$client->delete('http://localhost:8000/api/XXXX',[
    //         'json'=>[
    //             'userID' => $userID;
    //         ]);
    // 	 $response = $req->getBody();
    //     return redirect('admin/user-index');

    // }
    // public function blockUser(Request $request){
    // 	$userID = $request->userID;
    // 	$client = new Client();
    // 	$req = $client->

    // }
}
