@extends('master')

@section('content')

@if (session()->has('message'))
    {{ session()->get('message') }}
@endif

@if (auth()->check())
    {{ auth()->user()->name }}

    @if (auth()->user()->isAniversariante())
        <!-- Conteúdo específico para aniversariante -->
        <form action="{{ route('aniversarios.store') }}" method='POST'>
            @csrf
            <!-- ... restante do formulário para aniversariante ... -->
        </form>
    @elseif (auth()->user()->isAdmin())
        <!-- Conteúdo específico para administrador -->
        <!-- ... adicione aqui o conteúdo específico para administrador ... -->
    @endif

@endif



<form action="{{route('aniversarios.store')}}" method='POST'>
    @csrf
    <li>
        <label for="nome_aniversariante">Nome Aniversariante</label>
        <input type="text" name='nome_aniversariante'>
    </li>
    <li>
        <label for="idade_aniversariante">Idade Aniversariante</label>
        <input type="number" name='idade_aniversariante'>
    </li>
    <li>
        <label for="n_convidados">Número de Convidados</label>
        <input type="number" name='n_convidados'>
    </li>
    <li>
        <label for="pedido">Pedido</label>
        <input type="text" name='pedido'>
    </li>
    <input type="hidden" name="id_festa" value="{{auth()->user()->id}}">
    <li>
        <label for="data">Data</label>
        <input type="date" name='data'>
    </li>

    <button type="submit">Criar festa</button>

</form>


@endsection('content')