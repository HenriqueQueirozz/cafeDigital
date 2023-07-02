<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoricoPagamentoController extends Controller
{
    //
    public function index(){
        return view('app.historico-pagamento');
    }
}
