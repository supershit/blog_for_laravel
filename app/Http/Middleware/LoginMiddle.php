<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddle
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
        //dd(session('id'));
        if (!session('id')) {
           return redirect('/login')->with('info','请先登录');
        }
        return $next($request);
    }
}
