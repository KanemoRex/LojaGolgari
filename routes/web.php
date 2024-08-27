<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\LojaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\TransportadoraController;
use App\Http\Controllers\PresetController;
use App\Http\Controllers\PedidoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

// Rota para a página inicial
Route::view('/', 'welcome')->name('home');

// Rotas para outras páginas
Route::view('/artefatos', 'artefatos')->name('artefatos');
Route::view('/dashboard', 'dashboard')->name('dashboard');
Route::view('/contato', 'contato')->name('contato');
Route::view('/login', 'login')->name('login.form');
Route::view('/comparacao', 'comparacao')->name('comparacao.view');

// Rota para autenticação
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');

// Rota para exibir a view de tipo
Route::get('/tipo', [TipoController::class, 'index']);

//Rotas de produto
//Index do produto (listagem)
Route::get('/produto', ProdutoController::class .'@index')->name('produto.index');
// formulario para adicionar produto
Route::get('/produto/create', ProdutoController::class . '@create')->name('produto.create');
// adiciona o produto no banco
Route::post('/produto/store', ProdutoController::class .'@store')->name('produto.store');
// retorna a pagina que exibe os detalhes do produto
Route::get('/produto/{id}', ProdutoController::class .'@show')->name('produto.show');
// retorna o formulario para editar produto
Route::get('/produto/{id}/edit', ProdutoController::class .'@edit')->name('produto.edit');
// update de um produto
Route::put('/produto/{id}', ProdutoController::class .'@update')->name('produto.update');
// remove um produto
Route::delete('/produto/{id}/destroy', ProdutoController::class .'@destroy')->name('produto.destroy');

//Rotas de transportadora
//Index de transportadora (listagem)
Route::get('/transportadora', TransportadoraController::class .'@index')->name('transportadora.index');
// formulario para adicionar transportadora
Route::get('/transportadora/create', TransportadoraController::class . '@create')->name('transportadora.create');
// adiciona a transportadora no banco
Route::post('/transportadora/store', TransportadoraController::class .'@store')->name('transportadora.store');
// retorna a pagina que exibe os detalhes da transportadora
Route::get('/transportadora/{id}', TransportadoraController::class .'@show')->name('transportadora.show');
// retorna o formulario para editar transportadora
Route::get('/transportadora/{id}/edit', TransportadoraController::class .'@edit')->name('transportadora.edit');
// update de uma transportadora
Route::put('/transportadora/{id}', TransportadoraController::class .'@update')->name('transportadora.update');
// remove uma transportadora
Route::delete('/transportadora/{id}', TransportadoraController::class .'@destroy')->name('transportadora.destroy');

//Rotas de loja
//Index de loja (listagem)
Route::get('/loja', LojaController::class .'@index')->name('loja.index');
// formulario para adicionar loja
Route::get('/loja/create', LojaController::class . '@create')->name('loja.create');
// adiciona a loja no banco
Route::post('/loja/store', LojaController::class .'@store')->name('loja.store');
// retorna a pagina que exibe os detalhes da loja
Route::get('/loja/{id}', LojaController::class .'@show')->name('loja.show');
// retorna o formulario para editar loja
Route::get('/loja/{id}/edit', LojaController::class .'@edit')->name('loja.edit');
// update de uma loja
Route::put('/loja/{id}', LojaController::class .'@update')->name('loja.update');
// remove uma loja
Route::delete('/loja/{id}', LojaController::class .'@destroy')->name('loja.destroy');

//Rotas de preset
//Index de preset (listagem)
Route::get('/preset', PresetController::class .'@index')->name('preset.index');
// formulario para adicionar preset
Route::get('/preset/create', PresetController::class . '@create')->name('preset.create');
// adiciona a preset no banco
Route::post('/preset/store', PresetController::class .'@store')->name('preset.store');
// retorna a pagina que exibe os detalhes da preset
Route::get('/preset/{id}', PresetController::class .'@show')->name('preset.show');
// retorna o formulario para editar preset
Route::get('/preset/{id}/edit', PresetController::class .'@edit')->name('preset.edit');
// update de uma preset
Route::put('/preset/{id}', PresetController::class .'@update')->name('preset.update');
// remove uma preset
Route::delete('/preset/{id}', PresetController::class .'@destroy')->name('preset.destroy');

//Rotas de pedido
//Index de pedido (listagem)
Route::get('/pedido', PedidoController::class .'@index')->name('pedido.index');
// formulario para adicionar pedido
Route::get('/pedido/create', PedidoController::class . '@create')->name('pedido.create');
// adiciona a preset no banco
Route::post('/pedido/store', PedidoController::class .'@store')->name('pedido.store');
// retorna a pagina que exibe os detalhes do pedido
Route::get('/pedido/{id}', PedidoController::class .'@show')->name('pedido.show');
// retorna o formulario para editar pedido
Route::get('/pedido/{id}/edit', PedidoController::class .'@edit')->name('pedido.edit');
// update de um pedido
Route::put('/pedido/{id}', PedidoController::class .'@update')->name('pedido.update');
// remove um pedido
Route::delete('/pedido/{id}', PedidoController::class .'@destroy')->name('pedido.destroy');

//rota para logout
Route::post('/logout', function(){
    Auth::logout();
    return Redirect::to('login');
 })->name('logout');