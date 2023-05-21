<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoricoPagamentoController extends Controller
{
    //
    public function index(){
        $viewModel = [];
        return view('app/historico-pagamento', $viewModel);
    }
}
