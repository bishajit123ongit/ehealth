<?php

namespace App\Http\Middleware;

use Closure;

class AllRoleAuthentication
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
      
        if(auth()->user() ){
            return $next($request);
        }
        else if(!auth('doctor')->user()){
            return redirect('/login/doctor');
        }

        else if(auth('doctor')->user()){
            return $next($request);
        }
     
        else if(!auth()->user()){
            return redirect('/login');      
        }
        
        return $next($request);
    }
}
