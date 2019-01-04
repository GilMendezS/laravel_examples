<?php

namespace App\Http\Middleware;

use Closure;

class CheckName
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$names)
    {
        if(!in_array($request->user()->name, $names)){
            return redirect()->route('sin-permisos');
        }
        return $next($request);
    }
}
