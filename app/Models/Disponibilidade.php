<?php
// Disponibilidade.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disponibilidade extends Model
{
    use HasFactory;

    protected $fillable = ['dia_semana', 'horario_inicio', 'horario_fim'];
}
