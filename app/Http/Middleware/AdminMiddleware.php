<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    
    public function handle(Request $request, Closure $next, ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            
            if (Auth::guard('admin')->check()) {
                
                // dd("logged in");
               // return redirect('/dashboard');
                // Auth::guard('admin')->logout();
            } else {
                // pass here if you want to access dashboard
                return redirect('/login');
            }
        }

        return $next($request);
       
    }
}
