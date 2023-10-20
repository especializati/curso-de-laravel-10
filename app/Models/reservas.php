<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservas extends Model
{
    use HasFactory;
    protected $fillable=[
        'login',
        'data',
        'hora_inicial',
        'hora_final',
        'titulocomida',
        'idadeaniversariante',
        'nomeaniversariante',
        'status',
        'numeroconvidados'
    ];
}
