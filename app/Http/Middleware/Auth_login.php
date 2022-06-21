<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Auth_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $level)
    {   
        //Pengecekan Login
        if (!Auth::check()) {
            return redirect('login');
        }
        $user = Auth::user();

        //Jika sesuai dengan level
        if($user->level == $level)
            return $next($request);

        //Error message and Redirect
        return redirect('login')->with('fail',"Access is Denied");
    }
}
