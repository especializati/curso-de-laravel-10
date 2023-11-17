@extends('master')

@section('content')

@foreach($aniversarios as $aniversario)
    <li>{{$aniversarios->nome_aniversariante}}</li>

@endforeach

    <a href="{{route('aniversarios.create)}}">Fazer pedido</a>

@endsection