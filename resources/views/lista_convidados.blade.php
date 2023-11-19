@extends('layouts.app') {{-- Supondo que você tenha um layout base --}}

@section('content')
    @can('aniversariante-access') <!-- Verifica se o usuário é aniversariante -->
        <h1>Lista de Convidados para a Reserva #{{ $reserva->id }}</h1>

        <ul>
            @foreach($convidados as $convidado)
                <li>
                    {{ $convidado->nome }} - {{ $convidado->cpf }} ({{ $convidado->idade }} anos)
                    <form action="/reserva/{{ $reserva->id }}/remover-convidado/{{ $convidado->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Remover</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @else
        <p>Você não tem permissão para acessar a lista de convidados.</p>
    @endcan
@endsection
