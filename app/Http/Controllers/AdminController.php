<?php
// app/Http/Controllers/AdminController.php

use App\Models\Reserva;

class AdminController extends Controller
{
    // ... (outros métodos existentes)

    public function cancelarReserva($reservaId)
    {
        $reserva = Reserva::findOrFail($reservaId);

        // Implemente a lógica para cancelar a reserva (excluir do banco de dados, enviar notificações, etc.)

        $reserva->delete(); // Exemplo: Excluir a reserva

        return redirect('/admin/dashboard')->with('success', 'Reserva cancelada com sucesso!');
    }
    
    public function resultadoPesquisas()
    {
        $resultados = PesquisaSatisfacao::all(); // Supondo que você tenha um modelo PesquisaSatisfacao

        return view('admin.resultado_pesquisas', compact('resultados'));
    }
}

