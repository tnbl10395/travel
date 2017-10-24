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
        return response()->json($evalute::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = \JWTAuth::toUser($request->token);
//        return response()->json($user);
        if($user!=null){
            $evaluate = new Evaluate();
            $evaluateID = $evaluate->where('userID','=',$user->userID)
                                ->where('placeID','=',$request->placeID)
                                ->select('evaluateID')
                                ->first();
            if($evaluateID==null){
                $evaluate->userID = $user->userID;
                $evaluate->placeID = $request->placeID;
                $evaluate->rating = $request->rating;
                $evaluate->save();
                $this->calculatorRating($request->placeID);
                return response()->json($request->rating,201);
            }else{
                $this->update($request,$evaluateID);
                return response()->json($request->rating);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evaluate  $evaluate
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $user = \JWTAuth::toUser($request->token);
        if($user!=null)
        {
            $evaluate = new Evaluate();
            $rating = $evaluate->where('placeID','=',$id)
                                ->where('userID','=',$user->userID)
                                ->select('rating')
                                ->get();
            return response()->json($rating);
        }

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
        $user = \JWTAuth::toUser($request->token);
        $evaluate->userID = $user->userID;
        $evaluate->placeID = $request->placeID;
        $evaluate->rating = $request->rating;
        $evaluate->save();
        $this->calculatorRating($request->placeID);
//        return response()->json($evaluate,200);
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
