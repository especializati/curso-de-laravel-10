@extends('master')

@section('content')

@if (session()->has('message'))
    {{ session()->get('message') }}
@endif

@if (auth()->check())
    {{ auth()->user()->name }}
@endif



<form action="{{route('convidados.store')}}" method='POST'>
    @csrf
    <li>
        <label for="name">Nome</label>
        <input type="text" name='name'>
    </li>
    <li>
        <label for="idade_aniversariante">Idade</label>
        <input type="number" name='idade'>
    </li>
    <li>
        <label for="cpf">CPF</label>
        <input type="text" name='cpf'>
    </li>
    <input type="hidden" name="id_festa" value="{{auth()->user()->id}}">
    <button type="submit">Confirmar Presença</button>

</form>


@endsection('content')