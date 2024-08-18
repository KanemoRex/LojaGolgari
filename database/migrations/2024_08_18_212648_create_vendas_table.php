<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table->string('mes'); // Coluna para armazenar o mês da venda
            $table->decimal('valor', 8, 2); // Coluna para armazenar o valor da venda com 8 dígitos no total e 2 decimais
            $table->string('loja'); // Coluna para armazenar o nome da loja
            $table->timestamps(); // Colunas created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendas');
    }
};
