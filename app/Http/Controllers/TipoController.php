<?php

namespace App\Http\Controllers;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Http\Request;

class TipoController extends Controller
{
    public function index()
{
    $tipos = [
        ['tipo' => 'Maravilhosos', 'quantidade' => 10],
        ['tipo' => 'Armas mágicas', 'quantidade' => 15],
        ['tipo' => 'Armaduras mágicas', 'quantidade' => 8],
        ['tipo' => 'Focos Arcanos', 'quantidade' => 12],
    ];

    $chart = (new LarapexChart)->pieChart()
        ->setTitle('Distribuição dos Tipos de Itens')
        ->setLabels(array_column($tipos, 'tipo'))
        ->setDataset(array_column($tipos, 'quantidade'));

    return view('tipo', compact('chart'));

    }
}
