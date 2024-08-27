<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos')->insert([
            'nome' => 'Espátula de Mithril',
            'descricao' => 'Item Maravilhoso incomum',
            'imagem' => 'espada.jpg'
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Dispositivo de Fluxo',
            'descricao' => 'Item maravilhoso raro',
            'imagem' => 'dora.jpg'
        ]);
    }
}
