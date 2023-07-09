<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CafeEnderecoController extends Controller
{
    public function getCidadeByCodigoIbge($codigo_ibge) {
        $cidade = DB::table('cafe_cidades')->where('ibge_cid', $codigo_ibge)->first();

        if(isset($cidade)){
            return $cidade;
        }else{
            return false;
        }
    }

    public function getCidade($nome_cidade, $uf) {
        $cidade = DB::table('cafe_cidades')
                        ->join('cafe_estados', 'cafe_cidades.fk_idEstado_end', '=', 'cafe_estados.id_est')
                        ->where('nome_cid', $nome_cidade)
                        ->where('uf_est', $uf)->first();

        if(isset($cidade)){
            return get_object_vars($cidade);
        }else{
            return false;
        }
    }
}
