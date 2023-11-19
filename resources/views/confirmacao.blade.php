@extends('layouts.app') {{-- Supondo que você tenha um layout base --}}

@section('content')
    @can('aniversariante-access') <!-- Verifica se o usuário é aniversariante -->
        <h1>Confirmação de Presença para a Reserva #{{ $reserva->id }}</h1>

        <form action="/reserva/{{ $reserva->id }}/confirmar-presenca" method="post">
            @csrf

            <label for="nome">Nome completo:</label>
            <input type="text" name="nome" required>

            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" required>

            <label for="idade">Idade:</label>
            <input type="number" name="idade" required>

            <button type="submit">Confirmar Presença</button>
        </form>
    @else
        <p>Você não tem permissão para visualizar esta página.</p>
    @endcan
@endsection
