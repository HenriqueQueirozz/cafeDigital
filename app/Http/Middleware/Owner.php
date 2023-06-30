<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Owner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!auth()->check()){
            return redirect(route('login'));
        }

        $type = auth()->user()->fk_idTipoPerfil_usu;
        
        if($type > 1){
            return redirect(route('app.home'));
        }

        return $next($request);
    }
}
