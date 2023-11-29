@extends('layouts.app')

@section('content')
    <h1>Editar Disponibilidade</h1>

    <form action="{{ route('disponibilidades.update', $disponibilidade->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="dia_semana">Dia da Semana:</label>
        <input type="text" name="dia_semana" value="{{ $disponibilidade->dia_semana }}" required>

        <label for="horario_inicio">Horário Início:</label>
        <input type="time" name="horario_inicio" value="{{ $disponibilidade->horario_inicio }}" required>

        <label for="horario_fim">Horário Fim:</label>
        <input type="time" name="horario_fim" value="{{ $disponibilidade->horario_fim }}" required>

        <button type="submit">Salvar</button>
    </form>
@endsection