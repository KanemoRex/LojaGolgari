<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PresetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('presets')->insert([
            'user_id' => 1,
            'nome' => 'Joao Farias',
            'residencia' => 'Rua Guaporé, 200 - Chapecó/SC',
            'telefone' => '(49)3322-6557'
        ]);
    }
}
