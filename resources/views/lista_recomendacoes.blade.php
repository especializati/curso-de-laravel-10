<!-- resources/views/reservas/lista_recomendacoes.blade.php -->

@extends('layouts.app') {{-- Supondo que você tenha um layout base --}}

@section('content')
    <h1>Lista de Recomendações para a Reserva #{{ $reserva->id }}</h1>

    <ul>
        @foreach($recomendacoes as $recomendacao)
            <li>{{ $recomendacao->descricao }}</li>
        @endforeach
    </ul>

    <form action="/reserva/{{ $reserva->id }}/cancelar" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Cancelar Reserva</button>
    </form>
@endsection
