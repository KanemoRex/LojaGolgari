<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TransportadoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transportadoras')->insert([
            'nome' => 'Transportadora Padrao',
            'numerofrota' => '1',
            'zonaatendimento' => 'central'
        ]);
    }
}
