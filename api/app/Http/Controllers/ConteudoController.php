<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConteudoController extends Controller
{
    //
    public function index(){
        return view('app/conteudos');
    }
}
