<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use App\libs\Prefix;

class ImageController extends Controller
{
	 public function __construct()
    {
        $this->middleware('admin');
    }

    public function link(){
        $prefix = new Prefix();
        $link = $prefix->setPrefix();
        return $link;
    }

    public function index(){
    	$client = new Client();
    	$req = $client->get($this->link().'api/image');
    	$img = json_decode($req->getBody());
        return view('admin.Img')->with(['data'=>$img]);
    }

    public function store(Request $request){
        $picture = $request->all();
        $client = new Client();
        $req = $client->post($this->link().'api/image',[
            'multipart'=>[
                [
                    'name'=>'picture0',
                    'contents'=>@fopen($picture[0]->getRealPath(),'r'),
                    'filename'=>$picture->getClientOriginalName()
                ],
                [
                    'name'=>'picture1',
                    'contents'=>@fopen($picture[1]->getRealPath(),'r'),
                    'filename'=>$picture->getClientOriginalName()
                ],
                [
                    'name'=>'picture2',
                    'contents'=>@fopen($picture[2]->getRealPath(),'r'),
                    'filename'=>$picture->getClientOriginalName()
                ],
                [
                    'name'=>'picture3',
                    'contents'=>@fopen($picture[3]->getRealPath(),'r'),
                    'filename'=>$picture->getClientOriginalName()
                ]
            ]
        ]);
    }
}
