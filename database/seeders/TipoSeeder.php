<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos')->insert([
            ['tipo' => 'Maravilhosos', 'quantidade' => 50],
            ['tipo' => 'Armas mágicas', 'quantidade' => 75],
            ['tipo' => 'Armaduras mágicas', 'quantidade' => 40],
            ['tipo' => 'Focos Arcanos', 'quantidade' => 35],
        ]);
    }
}
