<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aniversario extends Model
{
    use HasFactory;


    protected $table = 'aniversarios';


    protected $fillable=[
        'nome_aniversariante',
        'data',
        'n_convidados',
        'pedido',
    ];
}
