<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use App\libs\uploadFileLibrary;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $image = new Image();
        return response()->json($image);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = new Image();
        $file = new uploadFileLibrary();
        $image->placeID = $request->placeID;
        $image->commentID = $request->commentID;
        $image->imageName = $file->upload($request->imageName);
        $image->save();
        return response()->json($image,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        return response()->json($image,404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        $file = new uploadFileLibrary();
        $image->placeID = $request->placeID;
        $image->commentID = $request->commentID;
        $image->imageName = $file->reload($request->imageName, $request->oldPicture);
        $image->save();
        return response()->json($image,201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        $file = new uploadFileLibrary();
        $file->deleteFile($image->imageName);
        $image->delete();
        return response()->json(null,204);
    }
}
