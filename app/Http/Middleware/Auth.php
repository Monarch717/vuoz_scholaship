<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Auth
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->session()->has('scholar_session')) {
            return $next($request);
        }

        if ($request->session()->has('scholar_session')) {
            return $next($request);
        }
        if ($request->session()->has('scholar_session')) {
            return $next($request);
        }
        return redirect('/login');
    }
}
