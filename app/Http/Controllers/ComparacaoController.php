<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class ComparacaoController extends Controller
{
    public function comparacao()
    {
        return view('comparacao');
    }

    public function gerarRelatorioVendas()
    {
        $data = [
            'title' => 'Relatório de Vendas'
        ];
        $pdf = PDF::loadView('relatorios.vendas', $data);
        return $pdf->download('relatorio_vendas.pdf');
    }

    public function gerarRelatorioItensMaisVendidos()
    {
        $data = [
            'title' => 'Relatório de Itens Mais Vendidos'
        ];
        $pdf = PDF::loadView('relatorios.itens_mais_vendidos', $data);
        return $pdf->download('relatorio_itens_mais_vendidos.pdf');
    }
}
