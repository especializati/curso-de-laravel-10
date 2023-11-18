<!-- resources/views/reservas/confirmacao.blade.php -->

@extends('layouts.app') {{-- Supondo que você tenha um layout base --}}

@section('content')
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
@endsection
