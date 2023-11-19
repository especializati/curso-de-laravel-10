@extends('layouts.app') {{-- Supondo que você tenha um layout base --}}

@section('content')
    @can('aniversariante-access') <!-- Verifica se o usuário é aniversariante -->
        <h1>Lista de Reservas</h1>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pacote</th>
                    <th>Convidados</th>
                    <th>Aniversariante</th>
                    <th>Idade</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservas as $reserva)
                    <tr>
                        <td>{{ $reserva->id }}</td>
                        <td>{{ $reserva->pacote }}</td>
                        <td>{{ $reserva->quantidade_convidados }}</td>
                        <td>{{ $reserva->nome_aniversariante }}</td>
                        <td>{{ $reserva->idade_comemorada }}</td>
                        <td>{{ $reserva->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Você não tem permissão para acessar a lista de reservas.</p>
    @endcan
@endsection
