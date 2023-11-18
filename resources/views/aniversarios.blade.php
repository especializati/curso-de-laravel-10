@extends('master')

@section('content')

@foreach($aniversarios as $aniversario)
    <li>{{$aniversario->nome_aniversariante}}
        |Idade:{{$aniversario->idade_aniversariante}}
        |Convidados:{{$aniversario->n_convidados}}
        |Pedido:{{$aniversario->pedido}}</li>

@endforeach

    <a href="{{route('aniversarios.create')}}">Fazer pedido</a>

@endsection