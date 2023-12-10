<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacote extends Model
{
    use HasFactory;

    protected $fillable = [
        'comidas',
        'bebidas',
        'preco_pessoa',
    ];
}
