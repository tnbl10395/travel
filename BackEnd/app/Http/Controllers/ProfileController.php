<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use App\libs\uploadFileLibrary;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = new Profile();
        return response()->json($profile::all(),404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profile = new Profile();
        $file = new uploadFileLibrary();
        $profile->firstName = $request->firstName;
        $profile->lastName = $request->lastName;
        $profile->age = $request->age;
        $profile->address = $request->address;
        $profile->avatar = $file->upload($request->avatar);
        $profile->phone = $request->phone;
        $profile->rating = $request->rating;
        $profile->save();
        return response()->json($profile,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        return response()->json($profile,404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        $file = new uploadFileLibrary();
        $profile->firstName = $request->firstName;
        $profile->lastName = $request->lastName;
        $profile->age = $request->age;
        $profile->address = $request->address;
        $profile->avatar = $file->reload()($request->avatar, $request->oldAvatar);
        $profile->phone = $request->phone;
        $profile->rating = $request->rating;
        $profile->save();
        return response()->json($profile,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        $file = new uploadFileLibrary();
        $file->deleteFile($profile->avatar);
        $profile->delete();
        return response()->json(null,404);
    }
}
