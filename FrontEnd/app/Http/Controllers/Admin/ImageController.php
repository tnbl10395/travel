<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class ImageController extends Controller
{
	 public function __construct()
    {
        $this->middleware('admin');
    }
    public function index(){
    	$client = new Client();
    	$req = $client->get('http://localhost:8000/api/image');
    	$img = json_decode($req->getBody());
        return view('admin.Img')->with(['data'=>$img]);
    }
}
