<?php

namespace App\Http\Middleware;

use Closure;

class CheckRegister
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
        $reponse = $next($request);
        return redirect()->route('register');
    }
}
