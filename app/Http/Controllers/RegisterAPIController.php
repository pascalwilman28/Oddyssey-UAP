<?php

namespace App\Http\Controllers;

use App\Models\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterAPIController extends Controller
{
    public function register(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);
        
        if($validate->fails()){
            return response()->json([
                'Status' => 'Failed',
                'message' => $validate->errors(),
            ], 401);
        }
        
        $user = User::create([
            'name' => trim($request->input('name')),
            'email' => strtolower($request->input('email')),
            'password' => Hash::make($request->input('password')),
            'level' => 'member',
        ]);

        $success['token'] = $user->createToken('Oddyssey')->accessToken;

        return response()->json([
            'Status' => 'Success',
            'user' => $user,
            'token' => $success,
        ]);
        
    }
}
