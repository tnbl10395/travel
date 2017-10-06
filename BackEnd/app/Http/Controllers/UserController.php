<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Exceptions\JWTException;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $user =  $this->user->create([
            'username' => $request->get('username'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'role' => $request->get('role'),
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'User created successfully!',
            'data' => $user
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only('username','password');
        $token = null;
        $validator = \Validator::make($credentials,[
            'username' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json($validator->errors()->getMessages(),400);
        }
        try
        {
            if (!$token = \JWTAuth::attempt($credentials)) {
                return response()->json('invalid_username_or_password');
            }
        } catch (JWTException $e){
            return response()->json(['failed_to_create_token'], 500);
        }
        return  response()->json(compact('token'));
    }

    public function getUserInfo(Request $request){
        $user = \JWTAuth::toUser($request->token);
        return response()->json(['result' => $user]);
    }
    public function getAllUser(){
        $user = new User();
        $infoUser = $user->select('userID','username','email')->get();
        return response()->json($infoUser);
    }
}
