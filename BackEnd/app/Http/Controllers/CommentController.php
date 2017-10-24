<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Image;
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = \JWTAuth::toUser($request->token);
        if($user!=null){
            $comment = new Comment();
            $comment->userID = $user['userID'];
            $comment->placeID = $request->placeID;
            $comment->content = $request->content;
            $comment->amountOfLike = 0;
            $comment->amountOfDisLike = 0;
            $comment->status = 0;
            $comment->save();
            return response()->json($comment,201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        return response()->json($comment);
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
        $comment->placeID = $request->placeID;
        $comment->content = $request->content;
        $comment->amountOfLike = $request->amountOfLike;
        $comment->amountOfDisLike = $request->amountOfDisLike;
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
        return response()->json($comment);
    }

    public function accept(Request $request,$id)
    {
        $comment = Comment::findOrFall($id)->update(['status'=>$request->status])->save();
        return response()->json('successfully');
    }

    public function getCommentOfPlace($placeId)
    {
        $comment = new Comment();
        $listComment = $comment->where('placeID','=',$placeId)
                               ->join('profile','comments.userID','=','profile.userID')
                               ->select(['comments.*','profile.fullname','profile.avatar'])->get();
        return response()->json($listComment);
    }

    public function count($placeId)
    {
        $comment = new Comment();
        $count = $comment->where('placeID','=',$placeId)
                         ->count();
        return response()->json($count);


    }
}
