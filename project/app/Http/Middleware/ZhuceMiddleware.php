<?php

namespace App\Http\Middleware;

use Closure;

class ZhuceMiddleware
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
       // return $next($request);
        if($request->session()->has('id')){
            return $next($request);
        }else{
            return redirect('/zhuce');
        }
    }
}
