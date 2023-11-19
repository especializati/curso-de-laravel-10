@extends('master')

@section('content')

@can('admin-access') <!-- Verifica se o usuário é administrador -->
    @foreach($aniversarios as $aniversario)
        <li>{{$aniversario->nome_aniversariante}}
            |Idade:{{$aniversario->idade_aniversariante}}
            |Convidados:{{$aniversario->n_convidados}}
            |Pedido:{{$aniversario->pedido}}</li>
    @endforeach

    <a href="{{route('aniversarios.create')}}">Fazer pedido</a>
@else
    <p>Você não tem permissão para visualizar esta página.</p>
@endcan

@endsection
