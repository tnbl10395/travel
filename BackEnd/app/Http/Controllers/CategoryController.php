<?php

namespace App\Http\Controllers;

use App\Category;
use function foo\func;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = new Category();
        return response()->json($category::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $array = $request->all();
        $categoryName = $array['categoryName'];
        $column = $array['column'];
        Schema::create($categoryName, function (Blueprint $table) use($categoryName,$column){
           $table->unsignedInteger(strtolower($categoryName).'ID');
           for($i=0;$i<count($column);$i++){
                if($column[$i][1]=='varchar'){
                    $table->string($column[$i][0],$column[$i][2]);
                }
                elseif($column[$i][1]=='integer'){
                    $table->integer($column[$i][0]);
                }
                elseif($column[$i][1]=='text'){
                    $table->text($column[$i][0]);
                }
                elseif($column[$i][1]=='float'){
                    $table->float($column[$i][0]);
                }
           }
//           $table->timestamps();

            $table->foreign(strtolower($categoryName).'ID')->references('placeID')->on('place')->onDelete('cascade');
        });
        $category = new Category();
        $category->categoryName = $categoryName;
        $category->save();
        return response()->json($category,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return response()->json($category,404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->locationID = $request->locationID;
        $category->categoryName = $request->categoryName;
        $category->save();
        return response()->json($category,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json(null,404);
    }

    public function createCategoryTable($list){

    }
}
