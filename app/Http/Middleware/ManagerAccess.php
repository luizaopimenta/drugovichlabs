<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ManagerAccess
{
    public function handle(Request $request, Closure $next)
    {

        if(auth()->check() AND auth()->user()->ManagerFull){
            return $next($request);
        }

        abort(401,'You must be a level 2 manager to access this module');

    }
}
