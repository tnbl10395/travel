<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use App\libs\Prefix;

class CreateCategoryAdminController extends Controller
{
    public function link(){
        $prefix = new Prefix();
        $link = $prefix->setPrefix();
        return $link;
    }

    public function createTable(Request $request){
        $client = new Client();
        $object = $request->all();
        $req = $client->post($this->link().'api/category',[
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
