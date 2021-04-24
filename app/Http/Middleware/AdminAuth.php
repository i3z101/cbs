<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Auth\UserLogin;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminAuth
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

            return $next($request);
        }else{
            return redirect('/admin/login');
        }
    }
}
