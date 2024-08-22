<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\ComparacaoController;

// Rota para a página inicial
Route::view('/', 'welcome')->name('home');

// Rotas para outras páginas
Route::view('/artefatos', 'artefatos')->name('artefatos');
Route::view('/contato', 'contato')->name('contato');
Route::view('/login', 'login')->name('login.form');
Route::view('/comparacao', 'comparacao')->name('comparacao.view');

// Rota para autenticação
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');

// Rota para exibir a view de tipo
Route::get('/tipo', [TipoController::class, 'index']);

