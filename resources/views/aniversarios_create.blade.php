@extends('master')

@section('content')

@if (session()->has('message'))
{{session()->get('message')}}
    
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
    <li>
        <label for="id_festa">Id</label>
        <input type="number" name='id_festa'>
    </li>
    <li>
        <label for="data">Data</label>
        <input type="date" name='data'>
    </li>

    <button type="submit">Criar festa</button>

</form>


@endsection('content')