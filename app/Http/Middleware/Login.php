<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            if(Auth::user()->role==1){
                return redirect()->route('adminhome');
            }
            if(Auth::user()->role==2 ||Auth::user()->role==3){
                return redirect('/');
        }
    }
        else{
            return $next($request);
        }

    }
}
