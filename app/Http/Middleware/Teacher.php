<?php

namespace App\Http\Middleware;

use Closure;

class Teacher
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
             if(auth()->user()->user_type != 2 ) 
                return redirect()->route('teachers.all');
        }
        else{
            return redirect()->to('login');
        }
        return $next($request);
    }
}
