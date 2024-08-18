<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    protected $table = 'itens_vendidos'; // Nome atualizado da tabela

    protected $fillable = ['tipo_item', 'quantidade'];
}
