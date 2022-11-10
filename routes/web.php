<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AplicacaoController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ExemplosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/aplicacoes', [AplicacaoController::class,'index'] );
Route::get('/contato', [ContatoController::class,'index'] );
Route::get('/exemplos', [ExemplosController::class,'index'] ); 
Route::get('/datablessimples', [ExemplosController::class,'DataTablesSimples'] ); 
Route::get('/datablesajax', [ExemplosController::class,'DataTableAjax'] );
Route::get('/cadastroajax', [ExemplosController::class,'CadastroAjax'] );  
Route::get('/editaporajax', [ExemplosController::class,'EditaCadastroAjax'] );