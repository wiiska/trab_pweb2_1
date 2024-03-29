<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\SkinController;
use App\Http\Controllers\CaixaController;

Route::get('/', function () {
    return view('welcome');
});
/*
//routes/web.php
Route::get('/aluno', [AlunoController::class, "index"]);
//carrega o formulário
Route::get('/aluno/create', [AlunoController::class, "create"]);
//recebe os dados do formulario para ser salvo na função store
Route::post('/aluno', [AlunoController::class, "store"])->name('aluno.store');
//Route::get('/aluno/destroy/{$id}', [AlunoController::class, "destroy"])->name('aluno.destroy');
Route::delete('/aluno/{$aluno}',
 [AlunoController::class, "destroy"])->name('aluno.destroy');

 Route::get('/aluno/edit/{id}', [AlunoController::class, "edit"])
    ->name('aluno.edit');
 Route::post('/aluno',
  [AlunoController::class, "update"])->name('aluno.update');
*/
Route::resource('pedido', PedidoController::class);
Route::post('/pedido  /search', [PedidoController::class, "search"])->name('pedido.search');

Route::resource('skin', SkinController::class);
Route::post('/skin  /search', [SkinController::class, "search"])->name('skin.search');

Route::resource('caixa', CaixaController::class);
Route::post('/caixa  /search', [CaixaController::class, "search"])->name('caixa.search');
