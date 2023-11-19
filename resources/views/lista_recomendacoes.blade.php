@extends('layouts.app') {{-- Supondo que você tenha um layout base --}}

@section('content')
    @can('view-reservation-recommendations', $reserva) {{-- Verifica a permissão usando Gate --}}
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
    @else
        <p>Você não tem permissão para visualizar esta lista de recomendações.</p>
    @endcan
@endsection
