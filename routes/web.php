<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\ComparacaoController;
use App\Http\Controllers\GraficoController;

// Rota para a página inicial
Route::view('/', 'welcome')->name('home');

// Rotas para outras páginas
Route::view('/artefatos', 'artefatos')->name('artefatos');
Route::view('/contato', 'contato')->name('contato');
Route::view('/login', 'login')->name('login.form');
Route::view('/comparacao', 'comparacao')->name('comparacao.view');
Route::view('/vendas', 'vendas')->name('vendas.view');
Route::view('/itens-mais-vendidos', 'itens_mais_vendidos')->name('itens_mais_vendidos.view');

// Rota para autenticação
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');

// Rota para o gráfico de tipos
Route::get('/tipo', [ChartController::class, 'tipo'])->name('tipo');

// Rota para exibir a view de comparação
Route::get('/comparacao', [ComparacaoController::class, 'comparacao'])->name('comparacao');

// Rota para gerar os PDFs
Route::get('/relatorio-vendas', [ComparacaoController::class, 'gerarRelatorioVendas'])->name('relatorio.vendas');
Route::get('/relatorio-itens-mais-vendidos', [ComparacaoController::class, 'gerarRelatorioItensMaisVendidos'])->name('relatorio.itens_mais_vendidos');

// Rota para gerar gráficos de dados
Route::get('/grafico-dados', [GraficoController::class, 'getData'])->name('grafico.dados');

