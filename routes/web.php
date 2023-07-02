<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConteudoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\HistoricoPagamentoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',             function () {return view('index');});
Route::get('/login',        function () {return view('login');});
Route::get('/cadastro',     function () {return view('cadastro');});
Route::get('/manutencao',   function () {return view('manutencao');});

// É necessário a validação de Login
Route::get('/app/conteudos',            [ConteudoController::class, 'index']);
Route::get('/app/cadastro-associado',   [UsuarioController::class, 'cadastro_associado']);
Route::get('/app/mapa-associados',      [UsuarioController::class, 'mapa_associados']);
Route::get('/app/historico-pagamento',  [HistoricoPagamentoController::class, 'index']);
Route::get('/app/gerenciamento-conteudos',   function () {return view('app.gerenciamento-conteudos');});

Route::post('/app',  [UsuarioController::class, 'store']);
