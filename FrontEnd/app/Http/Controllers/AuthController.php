<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class AuthController extends Controller
{
    public function login(Request $request)
    {
    	$client = new Client();
    	
    }
}
