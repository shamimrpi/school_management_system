<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
        if(auth()->check()){
             if(auth()->user()->user_type != 1 ) 
                return redirect()->to('/');
        }
        else{
            return redirect()->to('login');
        }
        return $next($request);
    }
}
