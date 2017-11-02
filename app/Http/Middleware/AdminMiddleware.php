<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

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
        if(!Auth()->check())// Primiro verifico que este LOGEADO
            return redirect('login');// De no ser asi, lo redirijo al LOGIN para que se VALIDE
        if (Auth::user()->role>2) // Aqui verifico si es un CLIENT o EVALUADOR | Este seria el ROLE a ser BLOQUEADO | Los demas[ADMIN - SOPORTE] tendrian ACCESO.
            return redirect('home');// De ser asi, lo redirijo al Home
        return $next($request);// Aqui CONTINUO de existir con otro MIDDLEWARE

    }
}
