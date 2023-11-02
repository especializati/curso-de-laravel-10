<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class opinioes extends Model
{
    use HasFactory;
    protected $fillable=[
        'nome_aniversariante',
        'resultado',
        'justifique'
    ];
}
