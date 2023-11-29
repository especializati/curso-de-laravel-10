<?php
// DisponibilidadeController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disponibilidade;

class DisponibilidadeController extends Controller
{
    public function index()
    {
        $disponibilidades = Disponibilidade::all();
        return view('disponibilidades.index', compact('disponibilidades'));
    }

    public function create()
    {
        return view('disponibilidades.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'dia_semana' => 'required',
            'horario_inicio' => 'required|date_format:H:i',
            'horario_fim' => 'required|date_format:H:i|after:horario_inicio',
        ]);

        Disponibilidade::create($data);

        return redirect()->route('disponibilidades.index')->with('success', 'Disponibilidade criada com sucesso!');
    }

    // Implemente os métodos edit, update, show e destroy de acordo com suas necessidades.
}

