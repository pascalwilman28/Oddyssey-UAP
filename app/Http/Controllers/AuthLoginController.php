<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthLoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function auth_login_process(Request $request)
    {
        request()->validate(
            [
                'email' => 'required|email',
                'password' => 'required|min:8',
            ]);

        $rememberme = $request->remember ? true : false;
        $secret = $request->only('email','password');

            if (Auth::attempt($secret,$rememberme)) {
                $user = Auth::user();
                session()->put('user_session',$secret);
                if ($user->level == 'admin') {
                    return redirect()->intended('admin');
                } elseif ($user->level == 'member') {
                    return redirect()->intended('member');
                }
                return redirect()->intended('/');
            }

        return redirect('login')->withInput()
                                ->withErrors(['login_failed' => 'Email or Password is wrong, Try again.']);
    }

    public function logout()
    {
        if(Auth::check()){
            Auth::logout(); //Logout
            Session::flush(); // Removes all session data
            request()->session()->invalidate();
            request()->session()->regenerateToken();
            return Redirect('/');
        }
    }
}
