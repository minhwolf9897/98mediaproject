<?php

namespace App\Http\Middleware;

use Closure;

class ActiveUserMiddleware
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
        if(auth()->check())
        {
            if(auth()->user()->status > 0) return $next($request);
        }
        return redirect()->route('client.index');
    }
}
