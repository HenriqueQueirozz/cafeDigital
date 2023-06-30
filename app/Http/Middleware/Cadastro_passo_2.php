<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Cadastro_passo_2
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
                case 3:
                    // Dados de endereco
                    return redirect(route('dados-de-endereco'));
                    break;
                case 4:
                    // Escolha de plano
                    return redirect(route('escolha-de-plano'));
                    break;
                case 5:
                    // Pagamento
                    return redirect(route('pagamento'));
                    break;
                case 6:
                    // Finalizado
                    return redirect()->intended(route('app.home'));
                    break;
            }
        }else{
            return redirect(route('login'));
        }

        return $next($request);
    }
}
