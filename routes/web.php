<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CaixaController;
use App\Http\Controllers\LeiloeiroController;
use App\Http\Controllers\ProcessoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\SistemaPermissaoController;
use App\Http\Controllers\ArquivoController;
use App\Http\Controllers\RecursosHumanosController;
use App\Http\Controllers\AdministrativoController;
use App\Http\Controllers\ConfiguracaoController;
use App\Http\Controllers\CidadesController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


// Route::prefix('sistema')->middleware(['admin'])->group(function(){
//     Route::get('home', [HomeController::class, 'index'])->name('sistema.home');
//     //Route::resource('caixa', CaixaController::class);
//     Route::resource('processo', ProcessoController::class);
// });

Route::prefix('sistema')->group(function(){
    Route::get('home', [HomeController::class, 'index'])->name('sistema.home');
    Route::get('acesso_negado', [SistemaPermissaoController::class, 'negado'])->name('permissao.negada');
});

Route::prefix('sistema')->middleware(['admin'])->group(function(){
    Route::get('administrativo', [AdministrativoController::class, 'index'])->name('administrativo.index');
    Route::get('configuracao', [ConfiguracaoController::class, 'index'])->name('configuracao.index');
    Route::resource('cidade', CidadesController::class);
    Route::resource('usuario', UsuarioController::class);
});

Route::prefix('sistema')->middleware(['arquivo'])->group(function(){
    Route::get('arquivo', [ArquivoController::class, 'index'])->name('sistema.arquivo');
    Route::resource('caixa', CaixaController::class);
    Route::resource('processo', ProcessoController::class);
});

Route::prefix('sistema')->middleware(['rh'])->group(function(){
    Route::resource('rh', RecursosHumanosController::class);
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
