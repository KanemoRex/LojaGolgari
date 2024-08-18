<?php

namespace App\Http\Controllers;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Http\Request;
use App\Models\Venda; // Atualize o modelo também

class ChartController extends Controller
{
    public function tipo()
    {
        // Puxar dados do banco de dados
        $vendas = Venda::all();
        $labels = $vendas->pluck('tipo_item')->toArray();
        $data = $vendas->pluck('quantidade')->toArray();

        $chart = (new LarapexChart)->pieChart()
            ->setTitle('Tipos de Itens Mais Vendidos')
            ->addData($data)
            ->setLabels($labels);

        return view('tipo', compact('chart'));
    }
}
