<?php

namespace Pedidoslinea\Http\Middleware;

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
        //auth()->check() nos permite verificar si el usuario ya aya iniciado seccion
        /*if(!auth()->check()){
            return redirect('/login');
        }*/
        if(!auth()->user()->admin){
            return redirect('/login');
        }
        return $next($request);
    }
}
