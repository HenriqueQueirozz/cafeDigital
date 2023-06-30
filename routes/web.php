<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcessoController;
use App\Http\Controllers\CafeUsuarioController;
use App\Http\Controllers\ConteudoController;
use App\Http\Controllers\HistoricoPagamentoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/',                         function () {return view('index');})->name('landing');
Route::get('/manutencao',               function () {return view('manutencao');})->name('manutencao');

Route::get('/login',                    function () {return view('acesso.login');})->name('login');
Route::get('/cadastro',                 function () {return view('acesso.cadastro');})->name('cadastro');

Route::post('/v1/authenticacao',         [AcessoController::class, 'authenticacao'])->name('authenticacao');
Route::post('/v1/register',              [AcessoController::class, 'register'])->name('register');

Route::middleware('auth')->group(function () {
    /*
    |--------------------------------------------------------------------------
    | Routas de Acesso
    |--------------------------------------------------------------------------
    */
    Route::get('/dados-do-usuario',     function () {return view('acesso.passo_2');})->name('dados-do-usuario')->middleware('cadastro_passo_2');
    Route::get('/dados-de-endereco',    function () {return view('acesso.passo_3');})->name('dados-de-endereco')->middleware('cadastro_passo_3');
    Route::get('/escolha-de-plano',     function () {return view('acesso.passo_4');})->name('escolha-de-plano')->middleware('cadastro_passo_4');
    Route::get('/pagamento',            function () {return view('acesso.passo_5');})->name('pagamento')->middleware('cadastro_passo_5');

    /*
    |--------------------------------------------------------------------------
    | Routas da Aplicação
    |--------------------------------------------------------------------------
    */
    Route::middleware('cadastrado')->group(function () {
        Route::get('/app',                      function () {return view('app.home');})->name('app.home');
        Route::get('/app/conteudos',            [ConteudoController::class, 'index'])->name('app.conteudos');
        Route::get('/app/mapa-associados',      [CafeUsuarioController::class, 'mapa_associados'])->name('app.associados');
        Route::get('/app/historico-pagamento',  [HistoricoPagamentoController::class, 'index'])->name('app.historico-pagamento');
    });

    Route::get('/v1/logout',                [AcessoController::class, 'logout'])->name('logout');
});