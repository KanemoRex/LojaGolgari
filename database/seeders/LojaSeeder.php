<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LojaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lojas')->insert([
            'imagem' => 'loja.jpg',
            'nomeloja' => 'Loja 01',
            'cnpj' => '11.111.111/1111-11'
        ]);
    }
}
