<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Artisan;

class ComparacaoController extends Controller
{
    public function comparacao()
    {
        return view('comparacao');
    }

    public function gerarRelatorioVendas()
    {
        // Gerar imagem do gráfico
        Artisan::call('node generateChartImage', [
            'chartData' => json_encode([44, 55, 41, 64, 22, 43, 21]),
            'chartLabels' => json_encode(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul']),
            'outputPath' => storage_path('app/public/vendas_chart.png')
        ]);

        $data = [
            'title' => 'Relatório de Vendas',
            'chart_image' => Storage::url('vendas_chart.png')
        ];
        $pdf = PDF::loadView('relatorios.vendas', $data);
        return $pdf->download('relatorio_vendas.pdf');
    }

    public function gerarRelatorioItensMaisVendidos()
    {
        // Gerar imagem do gráfico
        Artisan::call('node generateChartImage', [
            'chartData' => json_encode([31, 41, 35, 51, 49, 62, 69]),
            'chartLabels' => json_encode(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul']),
            'outputPath' => storage_path('app/public/itens_mais_vendidos_chart.png')
        ]);

        $data = [
            'title' => 'Relatório de Itens Mais Vendidos',
            'chart_image' => Storage::url('itens_mais_vendidos_chart.png')
        ];
        $pdf = PDF::loadView('relatorios.itens_mais_vendidos', $data);
        return $pdf->download('relatorio_itens_mais_vendidos.pdf');
    }
}
