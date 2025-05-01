<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            return redirect('/home');
        }
        return $next($request);
    }
}
