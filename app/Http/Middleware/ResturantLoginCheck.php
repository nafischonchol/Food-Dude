<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ResturantLoginCheck
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
        if (!$request->session()->exists('resturant-login')) {
            return redirect('/');
        }
        if(session('role')!='resturant-admin')
        {
            return redirect('/');
        }
        return $next($request);
    }
}
