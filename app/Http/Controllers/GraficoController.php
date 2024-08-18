<?php

// app/Http/Controllers/GraficoController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GraficoController extends Controller
{
    public function getData()
    {
        try {
            $data = DB::table('vendas')
                ->select('mes', 'valor', 'loja')
                ->get();
            return response()->json($data);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao obter dados: ' . $e->getMessage()], 500);
        }
    }
}

