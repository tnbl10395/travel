<?php

namespace App\Http\Controllers;

use App\Category;
use App\Evaluate;
use App\Image;
use App\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $place = new Place();
        return response()->json($place::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $place = new Place();
        $place->locationID = $request->locationID;
        $place->categoryID = $request->categoryID;
        $place->placeName = $request->placeName;
        $place->description = $request->description;
        $place->detail = $request->detail;
        $place->address = $request->address;
        $place->waypoint = $request->waypoint;
        $place->rating = 0;
        $place->save();
        return response()->json($place,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {
        return response()->json($place);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place)
    {
        $place->categoryID = $request->categoryID;
        $place->placeName = $request->placeName;
        $place->description = $request->description;
        $place->detail = $request->detail;
        $place->map = $request->map;
        $place->rating = $request->rating;
        $place->save();
        return response()->json($place,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        $place->delete();
        return response()->json(null);
    }

    public function createPlaceTable($cat)
    {
        $category = explode('%',$cat);
//        return response()->json($cat);
        $place = new Place();
        $listPlace = $place->join($category[1],'place.placeID','=',$category[1].'.'.$category[1].'ID')
                           ->select(['place.placeID','locationID','placeName','description',$category[1].'.*','rating'])
                            ->get();
        return response()->json($listPlace);
    }

    public function getPlaceBasedOnCategory($cat)
    {
        $category = explode('%',$cat);
        $listPlace = \DB::getSchemaBuilder()->getColumnListing($category[1]);
        return response()->json($listPlace);
    }

    public function storeRestOfPlace(Request $request){
        //cat chuoi
        $category = $request->category;
        $cat = explode('%',$category);
        //tim placeID vua them
        $placeID = \DB::table('place')->where('placeName','=',$request->placeName)
                                      ->orderBy('placeID','desc')
                                      ->limit(1)
                                      ->select('placeID')
                                      ->first();
        //request list
        $list = array_reverse($request->list);
        //them phan tu vao dau mang
        if(!is_array($list)){
            $listRow = [$placeID->placeID,$list];
        }else{
            array_unshift($list,$placeID->placeID);
            //xoa tat ca chi muc
             $listRow = array_values($list);
        }
//        return response()->json($listRow);
        //select column cua table
        $listColumn = \DB::getSchemaBuilder()->getColumnListing($cat[1]);
        //noi chuoi
        $listRest = array_combine($listColumn,$listRow);
        $categoryName = strtolower($cat[1]);
        $rest = \DB::table($categoryName)->insert($listRest);
        return response()->json($rest);
    }

    public function getListPlaceWithLocation($locationId){
//        $place = new Place();
//        $listPlace = $place->where('locationID','=',$locationId)->get();
//        return response()->json($listPlace);
        $place = new Place();
        $listPlace = $place->join('images','place.placeID','=','images.placeID')
            ->where('place.locationID','=',$locationId)
            ->select(['place.*','images.imageName'])
//            ->groupBy(['place.placeID'])
            ->get();
//        dump($listPlace);
//        $listPlace = $listPlace;
//        array_unique($listPlace);
//        $listPlace = $listPlace[]->
//        get_object_vars($listPlace);
//        foreach ($listPlace as $list){
//            for($i = 0;$i<count($list)-1;$i++){
//                get_object_vars($list)
//            }
//            return response()->json($list);
//        }
//        $listPlace = Place::select(['SELECT * FROM place
//                                          INNER JOIN images ON place.placeID = images.placeID
//                                          WHERE place.locationID ='.$locationId.' GROUP BY place.placeID']);
        return response()->json($listPlace);
    }

    public function getMoreInfo($placeId)
    {
        $place = new Place();
        $categoryID = $place->where('placeID','=',$placeId)
                    ->select('categoryID')
                    ->first();
        $category = new Category();
        $categoryName = $category->where('categoryID','=',$categoryID->categoryID)
                                ->select('categoryName')
                                ->first();
        $getColumn = \DB::getSchemaBuilder()->getColumnListing($categoryName->categoryName);
        array_shift($getColumn);
        $restOfField = \DB::table($categoryName->categoryName)
                            ->where($categoryName->categoryName.'ID','=',$placeId)
                            ->select('*')
                            ->first();
        foreach ($restOfField as $object){
            $getRow[] = $object;
        }
        array_shift($getRow);
        $getMoreInfo = array_combine($getColumn,$getRow);
        return response()->json($getMoreInfo);
    }

    public function getOneImageOfPlace($locationId){
        $image = new Image();
        $listImage = $image->groupBy(['placeID'])
                           ->select('placeID','imageName')
                           ->get();
        return response()->json($listImage);
    }
    public function get_infor_from_address($id) {
        $place = new Place();
        $address = $place->where('place.locationID','=',$id)->join('locations','place.locationID','=','locations.locationID')
                            ->select(["placeID","placeName","place.description","waypoint","locations.map"])->get();
        return response()->json($address);
    }
}
