<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preset extends Model
{

    protected $fillable = [
        'id',
        'user_id',
        'nome',
        'residencia',
        'telefone'
    ];

    use HasFactory;
}
