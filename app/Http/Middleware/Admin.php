<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }

        if(Auth::user()->role == 0){ // role 0 adalah admin
            return $next($request);
        }else if(Auth::user()->role == 1){ //role 1 adalah user biasa
            return redirect()->route('dashboard');
        }
    }
}
