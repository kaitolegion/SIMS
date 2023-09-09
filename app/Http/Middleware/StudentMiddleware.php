<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StudentMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next , ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;
       foreach ($guards as $guard) {

        if ($guard == "student" && Auth::guard($guard)->check()) {

            return dd($guard);

        } else {
         
        }
    }
      
        
        return $next($request);
    }
}
