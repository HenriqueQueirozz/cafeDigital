<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcessoController;
use App\Http\Controllers\CafeUsuarioController;
use App\Http\Controllers\ConteudoController;
use App\Http\Controllers\HistoricoPagamentoController;
use App\Http\Controllers\GerenciamentoConteudosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/',                         function () {return view('index');}             )->name('landing');
Route::get('/manutencao',               function () {return view('manutencao');}        )->name('manutencao');

Route::get('/login',                    function () {return view('acesso.login');}      )->name('login');
Route::get('/cadastro',                 function () {return view('acesso.cadastro');}   )->name('cadastro');

Route::post('/v1/authenticacao',         [AcessoController::class, 'authenticacao']     )->name('authenticacao');
Route::post('/v1/register',              [AcessoController::class, 'register']          )->name('register');
Route::post('/v1/redefinir-senha',        [AcessoController::class, 'redefinir_senha']   )->middleware('guest')->name('redefir_senha');

Route::middleware('auth')->group(function () {
    /*
    |--------------------------------------------------------------------------
    | Routas de Acesso
    |--------------------------------------------------------------------------
    */
    Route::get('/dados-do-usuario',     function () {return view('acesso.passo_2');}    )->name('dados-do-usuario')->middleware('cadastro_passo_2');
    Route::get('/dados-de-endereco',    function () {return view('acesso.passo_3');}    )->name('dados-de-endereco')->middleware('cadastro_passo_3');
    Route::get('/escolha-de-plano',     function () {return view('acesso.passo_4');}    )->name('escolha-de-plano')->middleware('cadastro_passo_4');
    Route::get('/pagamento',            function () {return view('acesso.passo_5');}    )->name('pagamento')->middleware('cadastro_passo_5');

    /*
    |--------------------------------------------------------------------------
    | Routas da Aplicação
    |--------------------------------------------------------------------------
    */
    Route::middleware('cadastrado')->group(function () {
        Route::get('/app',                          [CafeUsuarioController::class, 'meu_perfil']            )->name('app.home');
        Route::get('/app/conteudos',                [ConteudoController::class, 'index']                    )->name('app.conteudos');
        Route::get('/app/mapa-associados',          [CafeUsuarioController::class, 'mapa_associados']       )->name('app.associados');
        Route::get('/app/historico-pagamento',      [HistoricoPagamentoController::class, 'index']          )->name('app.historico-pagamento');
        
        Route::post('/v1/salvar-avatar',            [CafeUsuarioController::class, 'salvar_avatar']         )->name('v1.salvar_avatar');
        Route::post('/v1/salvar-senha',             [CafeUsuarioController::class, 'salvar_senha']          )->name('v1.salvar_senha');
        Route::post('/v1/salvar-dados-usuarios',    [CafeUsuarioController::class, 'salvar_dados_usuarios'] )->name('v1.salvar_dados_usuarios');
        Route::post('/v1/visualizar-usuario',       [CafeUsuarioController::class, 'visualizar_usuario']    )->name('v1.visualizar_usuario');
        Route::post('/v1/listar-associado',         [CafeUsuarioController::class, 'listar_associado']      )->name('v1.listar_associado');

        Route::middleware('admin')->group(function () {
            Route::get('/app/gerenciamento-conteudos',  function () {return view('app.gerenciamento-conteudos');}   )->name('app.gerenciar-conteudos');
            Route::post('/v1/salvar-conteudos',         [GerenciamentoConteudosController::class, 'store']          )->name('conteudos.store');
        });
    });

    Route::get('/v1/logout',                        [AcessoController::class, 'logout']                     )->name('logout');
});

/*
|--------------------------------------------------------------------------
| Errors Routes
|--------------------------------------------------------------------------
*/
// Route::get('/401',                         function () {return view('errors.401');});
// Route::get('/402',                         function () {return view('errors.402');});
// Route::get('/403',                         function () {return view('errors.403');});
// Route::get('/404',                         function () {return view('errors.404');});
// Route::get('/419',                         function () {return view('errors.419');});
// Route::get('/429',                         function () {return view('errors.429');});
// Route::get('/500',                         function () {return view('errors.500');});
// Route::get('/503',                         function () {return view('errors.503');});