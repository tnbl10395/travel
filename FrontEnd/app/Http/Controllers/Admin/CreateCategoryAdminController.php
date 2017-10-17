<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class CreateCategoryAdminController extends Controller
{
    public function createTable(Request $request){
        $client = new Client();
        $object = $request->all();
        $req = $client->post('http://localhost:8000/api/category',[
            'json'=>[
                'list'=>$object
            ]
        ]);
        $response = $req->getBody();
        if($response=='Successfully!'){
            return redirect('admin/category');
        }
    }
}
