<?php
// app/Http/Controllers/ReservaController.php

use App\Models\Reserva;

class ReservaController extends Controller
{
    public function formulario()
    {
        // Exibir o formulário de reserva
        return view('reservas.formulario');
    }

    public function solicitarReserva(Request $request)
    {
        // Validar os dados do formulário
        $request->validate([
            'pacote' => 'required',
            'quantidade_convidados' => 'required|numeric',
            'nome_aniversariante' => 'required',
            'idade_comemorada' => 'required|numeric',
        ]);

        // Salvar a reserva no banco de dados
        $reserva = new Reserva([
            'pacote' => $request->input('pacote'),
            'quantidade_convidados' => $request->input('quantidade_convidados'),
            'nome_aniversariante' => $request->input('nome_aniversariante'),
            'idade_comemorada' => $request->input('idade_comemorada'),
            'status' => 'Solicitado',
        ]);

        $reserva->save();

        // Redirecionar com mensagem de sucesso
        return redirect('/reservar')->with('success', 'Reserva solicitada com sucesso!');
    }
    public function listarReservas()
    {
        $reservas = Reserva::all(); // Obtém todas as reservas

        return view('reservas.lista', compact('reservas'));
    }
}
