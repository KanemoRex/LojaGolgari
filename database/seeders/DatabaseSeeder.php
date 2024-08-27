<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users')->insert([
            'name' => 'Teste',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin@123')
        ]);

       

        $this->call([
            ProdutoSeeder::class,
            LojaSeeder::class,
            PedidoSeeder::class,
            PedidoProdutoSeeder::class,
            PresetsSeeder::class,
            TransportadoraSeeder::class
        ]);
    }
}
