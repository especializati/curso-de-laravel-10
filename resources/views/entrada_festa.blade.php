<!-- resources/views/operacional/entrada_festa.blade.php -->

@extends('layouts.app') {{-- Supondo que você tenha um layout base para a área operacional --}}

@section('content')
    <h1>Entrada na Festa</h1>

    <div>
        <h2>Lista de Convidados Confirmados</h2>
        <ul>
            @foreach($convidadosConfirmados as $convidado)
                <li>
                    {{ $convidado->nome }}
                    @if($convidado->chegada_confirmada)
                        (Chegou)
                    @else
                        <form action="/operacional/confirmar-chegada/{{ $convidado->id }}" method="post">
                            @csrf
                            <button type="submit">Confirmar Chegada</button>
                        </form>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>

    <div>
        <h2>Resumo</h2>
        <p>Qtd. Chegaram: {{ $resumo['qtd_chegaram'] }} / Qtd. Confirmados: {{ $resumo['qtd_confirmados'] }}</p>
        <p>Pacote de Comida Escolhido: {{ $resumo['pacote_comida'] }}</p>
    </div>
@endsection
