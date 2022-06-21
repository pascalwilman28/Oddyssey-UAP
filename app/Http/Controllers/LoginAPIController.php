<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAPIController extends Controller
{
    public function login(){

        request()->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ]);
        
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            $success['token'] = $user->createToken('Oddyssey')->accessToken;
            return response()->json([
                'Status' => 'Success',
                'user' => $user,
                'token' => $success,
            ]);
            
        }else{
            return response()->json([
                'Status' => 'Failed',
                'message' => 'Invalid Email or Password',
            ], 401);
        }
    }
}
