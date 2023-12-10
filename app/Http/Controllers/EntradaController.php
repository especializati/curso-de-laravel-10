<?php
// app/Http/Controllers/EntradaController.php

namespace App\Http\Controllers;

use App\Models\Convidado; // Certifique-se de importar o modelo Convidado
use Illuminate\Http\Request;

class EntradaController extends Controller
{
    public function entradaFesta() // Corrigido o nome do método
    {
        // Simulando dados - substitua isso pela lógica real de recuperação de dados
        $convidadosConfirmados = Convidado::where('confirmed', true)->get();
        $resumo = [
            'qtd_chegaram' => $convidadosConfirmados->where('chegada_confirmada', true)->count(),
            'qtd_confirmados' => $convidadosConfirmados->count(),
            'pacote_comida' => 'Pacote Padrão', // Substitua pela lógica real para obter o pacote de comida escolhido
        ];

        return view('entrada_festa', compact('convidadosConfirmados', 'resumo'));
    }
}
