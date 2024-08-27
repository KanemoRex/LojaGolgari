<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PedidoProduto extends Model
{
    protected $fillable = [
        'id',
        'pedido_id',
        'produto_id'
    ];

    use HasFactory;

    
  
}
