@extends('master')

@section('content')

@if (session()->has('message'))
{{session->get('message')}}
    
@endif

<form action="{{route('aniversarios.store')}}" method='POST'>
    @csrf
    <li>
        <label for="nome_aniversariante">Nome Aniversariante</label>
        <input type="text" name='nome_aniversariante'>
    </li>
    <li>
        <label for="n_convidados">Número de Convidados</label>
        <input type="text" name='n_convidados'>
    </li>
    <li>
        <label for="pedido">Pedido</label>
        <input type="text" name='pedido'>
    </li>

    <button type="submit">Criar festa</button>

</form>


@endsection('content')