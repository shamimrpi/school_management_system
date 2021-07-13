<?php

namespace App\Http\Middleware;

use Closure;

class Student
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
             if(auth()->user()->user_type != 3 ) 
                return redirect()->route('students.all');
            
        }
        else{
            return redirect()->to('login');
        }
        return $next($request);
    }
}
