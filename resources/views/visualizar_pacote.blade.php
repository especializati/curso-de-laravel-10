<!-- resources/views/reservas/visualizar_pacote.blade.php -->

@extends('layouts.app') {{-- Supondo que você tenha um layout base --}}

@section('content')
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
@endsection
