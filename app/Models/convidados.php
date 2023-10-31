<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class convidados extends Model
{
    use HasFactory;
    protected $fillable=[
        'nome_convidado',
        'id_festa',
        'CPF',
        'idade',
        'status'
    ];
}
