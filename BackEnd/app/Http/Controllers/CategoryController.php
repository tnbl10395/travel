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
           $table->unsignedInteger(strtolower($categoryName).'ID')->primary();
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
        return response()->json($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data = $request->data;
        $categoryName = $data['categoryName'];
        $catName = $data['catName'];
        $field = $data['field'];
        $dataType = $data['dataType'];
        $length = $data['length'];
        //set column
        $column = $this->setColumn($field,$length,$dataType);
        //if current name == new name -> change name in category -> change name table -> change name.id
        if($catName!=$categoryName){
            $tb = \DB::getSchemaBuilder()->getColumnListing($categoryName);
            $category = Category::findOrFail($id)->update(['categoryName'=>$categoryName]);
            Schema::rename($catName,strtolower($categoryName));
            Schema::table(strtolower($categoryName), function ($table) use ($tb,$categoryName){
                $table->renameColumn($tb[0],strtolower($categoryName).'ID');
            });
            return response()->json($category);
        }else{
            //get list column in table
            $tb = \DB::getSchemaBuilder()->getColumnListing($categoryName);
            //remove id in array
            array_shift($tb);
            //
            if(count($tb)==count($column)){
                for ($i=0;$i<count($column);$i++){
                    if($tb[$i]!=$column[$i][0]){
                        //change name column
                        Schema::table(strtolower($categoryName), function ($table) use ($tb,$column,$i){
                            $table->renameColumn($tb[$i],$column[$i][0]);
                        });
                        //change type and length of column
                        $this->changeTable($categoryName,$column,$i);
                    }elseif($tb[$i]==$column[$i][0]){
                        $this->changeTable($categoryName,$column,$i);
                    }
                }
            }elseif(count($tb)!=count($column)){
                for ($i=0;$i<count($column);$i++){
                    if(isset($tb[$i])==true){
                        if($tb[$i]!=$column[$i][0]){
                            Schema::table(strtolower($categoryName), function ($table) use ($tb,$column,$i){
                                $table->renameColumn($tb[$i],$column[$i][0]);
                            });
                            Schema::table(strtolower($categoryName), function ($table) use ($column,$i){
                                if($column[$i][1]=='varchar'){
                                    $table->string($column[$i][0],$column[$i][2])->change();
                                }else if($column[$i][1]=='text'){
                                    $table->text($column[$i][0])->change();
                                }
                            });
                        }elseif($tb[$i]==$column[$i][0]){
                            Schema::table(strtolower($categoryName), function ($table) use ($column,$i){
                                if($column[$i][1]=='varchar'){
                                    $table->string($column[$i][0],$column[$i][2])->nullable()->change();
                                }else if($column[$i][1]=='text'){
                                    $table->text($column[$i][0])->nullable()->change();
                                }
                            });
                        }
                    }
                    elseif(isset($tb[$i])==false){
                        Schema::table(strtolower($categoryName), function ($table) use ($column,$i){
                            if($column[$i][1]=='varchar'){
                                $table->string($column[$i][0],$column[$i][2])->nullable();
                            }else if($column[$i][1]=='text'){
                                $table->text($column[$i][0])->nullable();
                            }
                        });
                    }
                }
            }
            $tbb = \DB::getSchemaBuilder()->getColumnListing(strtolower($categoryName));
            return response()->json($tbb);
        }
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
        Schema::disableForeignkeyConstraints();
        Schema::dropIfExists($category->categoryName);
        Schema::enableForeignkeyConstraints();
        return response()->json(null);
    }

    public function showColumn($id){
        $category = Category::findOrFail($id);
        $column = \DB::select(\DB::raw("SHOW FIELDS FROM ".$category->categoryName));
        array_shift($column);
        $colu = array($category);
        for($i=0;$i<count($column);$i++){
            $col[$i] = (array) $column[$i];
            if($col[$i]['Type']!='text'){
                $array = explode('(',trim($col[$i]['Type'],')'));
                $key = ['Field','Type','Length'];
                $val = [$col[$i]['Field'],$array[0],$array[1]];
                $ar = array_combine($key,$val);
                array_push($colu,$ar);
            }else{
                while (count($col[$i])>2){
                    array_pop($col[$i]);
                }
                array_push($colu,$col[$i]);
            }
        }
        return response()->json($colu);
    }

    public function changeTable($categoryName,$column,$i){
        Schema::table(strtolower($categoryName), function ($table) use ($column,$i){
            if($column[$i][1]=='varchar'){
                $table->string($column[$i][0],$column[$i][2])->change();
            }else if($column[$i][1]=='text'){
                $table->text($column[$i][0])->change();
            }
        });
    }

    public function setColumn($field,$length,$dataType){
        if(count($field)==count($length)){
            for($i=0;$i<count($field);$i++){
                if($dataType[$i]=='varchar'){
                    $column[] = array($field[$i],$dataType[$i],$length[$i]);
                }else{
                    $column[] = array($field[$i],$dataType[$i]);
                }
            }
            return $column;
        }else{
            for($i=0;$i<count($field);$i++){
                if($dataType[$i]=='varchar'){
                    if(!isset($length[$i])){
                        $column[] = array($field[$i],$dataType[$i],$length[$i-1]);
                    }else{
                        $column[] = array($field[$i],$dataType[$i],$length[$i]);
                    }

                }else{
                    $column[] = array($field[$i],$dataType[$i]);
                }
            }
            return $column;
        }
    }

    public function deleteColumn($name){
        $arr = explode('%',$name);
        Schema::table(strtolower($arr[0]),function ($table) use ($arr) {
            $table->dropColumn($arr[1]);
        });
    }
}
