<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class task
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
        if(session()->missing('user')) return redirect('login');
        return $next($request);
    }
}
