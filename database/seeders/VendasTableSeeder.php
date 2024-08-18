<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VendasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('itens_vendidos')->insert([
            ['tipo_item' => 'Maravilhosos', 'quantidade' => 10],
            ['tipo_item' => 'Armas mágicas', 'quantidade' => 15],
            ['tipo_item' => 'Armaduras mágicas', 'quantidade' => 20],
            ['tipo_item' => 'Focos Arcanos', 'quantidade' => 5],
        ]);
    }
}
