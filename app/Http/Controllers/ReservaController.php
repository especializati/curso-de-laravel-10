<?php
// app/Http/Controllers/ReservaController.php

use App\Models\Reserva;
use App\Models\Convidado;

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
    
    public function formularioConfirmacao($reservaId)
    {
        $reserva = Reserva::findOrFail($reservaId);
        return view('reservas.confirmacao', compact('reserva'));
    }

    public function confirmarPresenca(Request $request, $reservaId)
    {
        // Validar os dados do formulário
        $request->validate([
            'nome' => 'required',
            'cpf' => 'required|cpf', // Você pode usar uma regra de validação customizada para CPF
            'idade' => 'required|numeric',
        ]);

        // Salvar o convidado no banco de dados associado à reserva
        $convidado = new Convidado([
            'nome' => $request->input('nome'),
            'cpf' => $request->input('cpf'),
            'idade' => $request->input('idade'),
        ]);

        $reserva = Reserva::findOrFail($reservaId);
        $reserva->convidados()->save($convidado);

        return redirect()->back()->with('success', 'Presença confirmada com sucesso!');
    }

    public function listaConvidados($reservaId)
    {
        $reserva = Reserva::findOrFail($reservaId);
        $convidados = $reserva->convidados;

        return view('reservas.lista_convidados', compact('reserva', 'convidados'));
    }

    public function removerConvidado($reservaId, $convidadoId)
    {
        // Implemente a lógica para remover um convidado específico
    }
    public function visualizarPacote($reservaId)
    {
        $reserva = Reserva::findOrFail($reservaId);
        $pacoteAtual = $reserva->pacote;

        $pacotesDisponiveis = PacoteComida::all(); // Supondo que você tenha um modelo PacoteComida

        return view('reservas.visualizar_pacote', compact('reserva', 'pacoteAtual', 'pacotesDisponiveis'));
    }

    public function trocarPacote(Request $request, $reservaId)
    {
        // Validar os dados do formulário
        $request->validate([
            'novo_pacote' => 'required',
        ]);

        $reserva = Reserva::findOrFail($reservaId);
        $pacoteAtual = $reserva->pacote;

        $novoPacote = PacoteComida::findOrFail($request->input('novo_pacote'));

        // Calcule a diferença de valores entre o pacote atual e o novo
        $diferencaValor = $novoPacote->valor - $pacoteAtual->valor;

        // Pode implementar a lógica para pagar ou receber a diferença, conforme necessário

        // Atualize o pacote na reserva
        $reserva->pacote()->associate($novoPacote);
        $reserva->save();

        return redirect()->back()->with('success', 'Pacote trocado com sucesso!');
    }
}

