<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Http\Middleware\Authenticate as Auth;

class checklogin
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
        if (Auth::check() && Auth::user()->idAuth==1) {
            return $next($request);
        }else{
            session()->flash('notice','Tài khoản không có quyền quản trị');
            return redirect()->route('login');
        }

    }
}
