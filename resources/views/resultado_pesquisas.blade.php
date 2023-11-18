<!-- resources/views/admin/resultado_pesquisas.blade.php -->

@extends('layouts.app') {{-- Supondo que você tenha um layout base para o painel administrativo --}}

@section('content')
    <h1>Resultado das Pesquisas</h1>

    <table>
        <thead>
            <tr>
                <th>ID Reserva</th>
                <th>Pergunta 1</th>
                <th>Pergunta 2</th>
                <th>Pergunta Dissertativa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($resultados as $resultado)
                <tr>
                    <td>{{ $resultado->reserva_id }}</td>
                    <td>{{ $resultado->pergunta_1 }}</td>
                    <td>{{ $resultado->pergunta_2 }}</td>
                    <td>{{ $resultado->pergunta_dissertativa }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
