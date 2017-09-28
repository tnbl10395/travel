<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comment = new Comment();
        return response()->json($comment::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment = new Comment();
        $comment->userID = $request->userID;
        $comment->hotelID = $request->hotelID;
        $comment->restaurantID = $request->restaurantID;
        $comment->touristAttractionID = $request->touristAttractionID;
        $comment->content = $request->content;
        $comment->amountOfLike = $request->amountOfLike;
        $comment->amountOfDisLike = $request->amountOfDisLike;
        $comment->amountOfView = $request->amountOfView;
        $comment->save();
        return response()->json($comment,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        return response()->json($comment,404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        $comment->userID = $request->userID;
        $comment->hotelID = $request->hotelID;
        $comment->restaurantID = $request->restaurantID;
        $comment->touristAttractionID = $request->touristAttractionID;
        $comment->content = $request->content;
        $comment->amountOfLike = $request->amountOfLike;
        $comment->amountOfDisLike = $request->amountOfDisLike;
        $comment->amountOfView = $request->amountOfView;
        $comment->save();
        return response()->json($comment,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return response()->json($comment,404);
    }
}
