<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PedidoProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pedido_produtos')->insert([
            'pedido_id' => 1,
            'produto_id' => 1
        ]);
        DB::table('pedido_produtos')->insert([
            'pedido_id' => 1,
            'produto_id' => 2
        ]);
    }
}
