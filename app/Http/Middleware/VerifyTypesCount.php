<?php

namespace App\Http\Middleware;

use Closure;
use App\Type;

class VerifyTypesCount
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

        if(Type::all()->count()==0){
            session()->flash('error','You need add type to able to create doctor.');
            return redirect(route('types.create'));
        }
        return $next($request);
    }
}
