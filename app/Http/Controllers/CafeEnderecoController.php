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
}
