<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RestrictedManagerAccess
{
     public function handle(Request $request, Closure $next)
    {

        if(auth()->check() AND !auth()->user()->Manager){
            return $next($request);
        }

        abort(401,'You must be a level 1 manager to access this module');

    }
}
