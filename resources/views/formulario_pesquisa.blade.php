@extends('layouts.app') {{-- Supondo que você tenha um layout base --}}

@section('content')
    @can('aniversariante-access') <!-- Verifica se o usuário é aniversariante -->
        <h1>Pesquisa de Satisfação para a Reserva #{{ $reserva->id }}</h1>

        <form action="/reserva/{{ $reserva->id }}/pesquisa-satisfacao" method="post">
            @csrf

            <label for="pergunta_1">Como foi a qualidade da comida?</label>
            <select name="pergunta_1" required>
                <option value="excelente">Excelente</option>
                <option value="bom">Bom</option>
                <option value="regular">Regular</option>
                <option value="ruim">Ruim</option>
            </select>

            <label for="pergunta_2">Como foi o atendimento?</label>
            <select name="pergunta_2" required>
                <option value="excelente">Excelente</option>
                <option value="bom">Bom</option>
                <option value="regular">Regular</option>
                <option value="ruim">Ruim</option>
            </select>

            <label for="pergunta_dissertativa">Deixe-nos saber mais detalhes:</label>
            <textarea name="pergunta_dissertativa" required></textarea>

            <button type="submit">Enviar Pesquisa</button>
        </form>
    @else
        <p>Você não tem permissão para acessar este formulário de pesquisa.</p>
    @endcan
@endsection
