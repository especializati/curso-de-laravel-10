@extends('master')

@section('content')

@if(auth()->user())
    @foreach($aniversarios as $aniversario)
        <li>{{$aniversario->nome_aniversariante}}
            |Idade:{{$aniversario->idade_aniversariante}}
            |Convidados:{{$aniversario->n_convidados}}
            |Pedido:{{$aniversario->pedido}}
            |Data:{{$aniversario->data}}
            |Estado:{{$aniversario->estado}}
            |<form action="{{ route('aniversarios.update', ['aniversario' => $aniversario->id]) }}" method="post">
            <input type="hidden" name="estado" value="{{!$aniversario->estado}}">
            <button type="submit">Confirmar</button>
        </form>
    </li>
    @endforeach

    <a href="{{route('aniversarios.create')}}">Fazer pedido</a>
@else
    <p>Você não tem permissão para visualizar esta página.</p>
@endif

@endsection
