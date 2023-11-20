@extends('layouts.app') {{-- Supondo que você tenha um layout base --}}

@section('content')
    @if (auth()->check() && (auth()->user()->acesso === 'administrativo' || auth()->user()->acesso === 'comercial'))
        <h1>Visualização e Troca de Pacote para a Reserva #{{ $reserva->id }}</h1>

        <p>Pacote Atual: {{ $pacoteAtual->nome }} - R$ {{ $pacoteAtual->valor }}</p>

        <form action="/reserva/{{ $reserva->id }}/trocar-pacote" method="post">
            @csrf

            <label for="novo_pacote">Escolha um Novo Pacote:</label>
            <select name="novo_pacote" required>
                @foreach($pacotesDisponiveis as $pacote)
                    <option value="{{ $pacote->id }}">{{ $pacote->nome }} - R$ {{ $pacote->valor }}</option>
                @endforeach
            </select>

            <button type="submit">Trocar Pacote</button>
        </form>
    @else
        <p>Você não tem permissão para visualizar esta página.</p>
    @endif
@endsection
