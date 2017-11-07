<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $client = new Client();
        $req = $client->get('http://localhost:8000/api/category');
        $category = json_decode($req->getBody());
        return view('admin.Category')->with(['list'=>$category]);
    }

    public function addCategory(Request $request)
    {
        $data = $request->all();
        $categoryName = $data['categoryName'];
        $field = $data['field'];
        $dataType = $data['dataType'];
        $length = $data['length'];
        for($i=0;$i<count($field);$i++){
            $column[] = array($field[$i],$dataType[$i],$length[$i]);
        }
        $client = new Client();
        $req = $client->post('http://localhost:8000/api/category',[
            'json'=>[
                'categoryName' => $categoryName,
                'column' => $column
            ]
        ]);
        $response = $req->getBody();
        dd(json_decode($response));
        return redirect('admin/category-index');
    }

    public function destroy($id){
        $client = new Client();
        $req = $client->delete('http://localhost:8000/api/category/'.$id);
        $responese = json_decode($req->getBody());
        return redirect()->back();
    }

    public function getOne($id){
        $client = new Client();
        $req = $client->get('http://localhost:8000/api/category-column/'.$id);
        $response = json_decode($req->getBody());
//        dd($response);
        return view('admin.edit-category')->with(['column'=>$response]);
    }

    public function editCategory(Request $request, $id){
        $data = $request->all();
        $client = new Client();
        $req = $client->post('http://localhost:8000/api/category/'.$id,[
            'json'=>[
                'data'=>$data,
                '_method'=>'PUT'
            ],
        ]);
        $response = json_decode($req->getBody());
//        dd($response);
        return redirect()->back();
    }

    public function deleteColumn($name){
        $client = new Client();
        $req = $client->get('http://localhost:8000/api/delete-column/'.$name);
        return redirect()->back();
    }
}
