<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class foods extends Model
{
    use HasFactory;
    protected $fillable=[
        'titulo',
        'Foto1',
        'Foto2',
        'Foto3',
        'lista_comidas',
        'lista_bebidas'

    ];
}
