<?php

namespace App\Http\Controllers;

use App\Evaluate;
use App\Place;
use Illuminate\Http\Request;
use Mockery\Exception;

class EvaluateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evalute = new Evaluate();
        return response()->json($evalute::all(),404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $evaluate = new Evaluate();
        $evaluate->userID = $request->userID;
        $evaluate->placeID = $request->placeID;
        $evaluate->rating = $request->rating;
        $evaluate->save();
        $this->calculatorRating($request->placeID);
        return response()->json($evaluate,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evaluate  $evaluate
     * @return \Illuminate\Http\Response
     */
    public function show(Evaluate $evaluate)
    {
        return response()->json($evaluate,404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evaluate  $evaluate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evaluate $evaluate)
    {
        $evaluate->userID = $request->userID;
        $evaluate->placeID = $request->placeID;
        $evaluate->rating = $request->rating;
        $evaluate->save();
        $this->calculatorRating($request->placeID);
        return response()->json($evaluate,200);
    }
    /**
     * Calculator of Rating and save place table
     */
    public function calculatorRating($placeID){
        $evaluate = new Evaluate();
        $place = new Place();
        $total = $evaluate->where('placeID',$placeID)
                          ->sum('rating');
        $count = $evaluate->where('placeID',$placeID)
                          ->count('rating');
        if($count!=0){
            $average = $total/$count;
        }elseif($count==0){
            $average = 0;
        }
        $place->where('placeID',$placeID)
              ->update(['rating'=>$average]);
    }
}
