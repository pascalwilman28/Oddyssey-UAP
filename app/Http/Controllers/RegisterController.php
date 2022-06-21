<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register_process(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'confirm_password' => 'required|min:8|same:password',
        ]);

        $user = User::create([
            'name' => trim($request->input('name')),
            'email' => strtolower($request->input('email')),
            'password' => Hash::make($request->input('password')),
            'level' => 'member',
        ]);

        if($user){
            $secret = $request->only('email','password');

            if (Auth::attempt($secret)) {
                $user = Auth::user();
                session()->put('user_session',$secret);
                if ($user->level == 'admin') {
                    return redirect()->intended('admin');
                } elseif ($user->level == 'member') {
                    return redirect()->intended('member');
                }
                return redirect()->intended('/');
            }
        }

        return redirect('register');
    }
}
