<?php
// app/Http/Controllers/OperacionalController.php
use Illuminate\Support\Facades\DB;
use App\Models\Reserva;
use App\Models\Convidado;

class OperacionalController extends Controller
{
    public function entradaFesta()
    {
        $reservaAtual = Reserva::where('data', now()->format('Y-m-d'))->first();

        if (!$reservaAtual) {
            return redirect()->back()->with('error', 'Nenhuma reserva encontrada para a data atual.');
        }

        $convidadosConfirmados = $reservaAtual->convidados()->where('chegada_confirmada', true)->get();

        $resumo = [
            'qtd_chegaram' => $convidadosConfirmados->count(),
            'qtd_confirmados' => $reservaAtual->convidados()->count(),
            'pacote_comida' => $reservaAtual->pacote->nome,
        ];

        return view('operacional.entrada_festa', compact('convidadosConfirmados', 'resumo'));
    }

    // Métodos para confirmar chegada e incluir convidados extras podem ser adicionados aqui
    ////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////

    public function proximasFestas()
    {
        $proximasFestas = Reserva::where('data', '>=', now()->format('Y-m-d'))
            ->orderBy('data', 'asc')
            ->orderBy('hora', 'asc')
            ->get();

        return view('operacional.proximas_festas', compact('proximasFestas'));
    }







}

