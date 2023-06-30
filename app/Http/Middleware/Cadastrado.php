<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Cadastrado
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->check()){
            $etapa = auth()->user()->fk_idAberturaEtapa_usu;

            switch ($etapa){
                case 2:
                    // Dados do usuario
                    return redirect('dados-do-usuario');
                    break;
                case 3:
                    // Dados de endereco
                    return redirect('dados-de-endereco');
                    break;
                case 4:
                    // Escolha de plano
                    return redirect('escolha-de-plano');
                    break;
                case 5:
                    // Pagamento
                    return redirect('pagamento');
                    break;
            }
        }else{
            return redirect(route('login'));
        }

        return $next($request);
    }
}
