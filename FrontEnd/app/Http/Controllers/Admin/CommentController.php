<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\libs\Prefix;

class CommentController extends Controller
{
    public function link(){
        $prefix = new Prefix();
        $link = $prefix->setPrefix();
        return $link;
    }

    public function index(){
        $client = new Client();
        $req = $client->get($this->link().'api/comment');
        $listComment = json_decode($req->getBody());
        return view('admin.Comments')->with(['listComment'=>$listComment]);
    }

    public function destroy($id){
        $client = new Client();
        $req = $client->delete($this->link().'api/comment',$id);
        $response = json_decode($req->getBody());
        if($response==null){
            return redirect()->back();
        }
    }

    public function accept($id){
        $client = new Client();
        $req = $client->post($this->link().'api/comment-accept/'.$id, [
            'json'=>[
                'status'=>1,
                '_method'=>'PUT'
            ]
        ]);
        $response = json_decode($req->getBody());
        if($response!=null){
            return redirect()->back();
        }
    }
}
