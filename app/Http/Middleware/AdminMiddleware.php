<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        /*
        if (!auth()->Check()) {
            return redirect('/login');
        }
        */        
        if (auth()->user()->roll->name != "Administrador"){
            return redirect('/');
        }

        return $next($request);
    }
}
