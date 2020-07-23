<?php

namespace App\Http\Middleware;

use Closure;

class DoctorAuthentication
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

        if(!auth('doctor')->user()){
            return redirect(url('/login/doctor'));
        }
        return $next($request);
    }
}
