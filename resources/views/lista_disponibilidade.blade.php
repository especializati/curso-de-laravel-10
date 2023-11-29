@extends('layouts.app')

@section('content')
    <h1>Lista de Disponibilidades</h1>
    
    <table>
        <thead>
            <tr>
                <th>Dia da Semana</th>
                <th>Horário Início</th>
                <th>Horário Fim</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($disponibilidades as $disponibilidade)
                <tr>
                    <td>{{ $disponibilidade->dia_semana }}</td>
                    <td>{{ $disponibilidade->horario_inicio }}</td>
                    <td>{{ $disponibilidade->horario_fim }}</td>
                    <td>
                        <a href="{{ route('disponibilidades.show', $disponibilidade->id) }}">Detalhes</a>
                        <a href="{{ route('disponibilidades.edit', $disponibilidade->id) }}">Editar</a>
                        <form action="{{ route('disponibilidades.destroy', $disponibilidade->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('disponibilidades.create') }}">Adicionar Disponibilidade</a>
@endsection