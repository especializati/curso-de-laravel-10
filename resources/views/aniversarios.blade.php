@extends('master')

@section('content')

@if(auth()->user())
    @foreach($aniversarios as $aniversario)
    <li>
            {{ $aniversario->nome_aniversariante }}
            | Idade: {{ $aniversario->idade_aniversariante }}
            | Convidados: {{ $aniversario->n_convidados }}
            | Pedido: {{ $aniversario->pedido }}
            | Data: {{ $aniversario->data }}
            | 

            
        </li>
    @endforeach
    @if(auth()->user()->acesso == 'B')
    <a href="{{ route('aniversarios.create') }}">Fazer pedido</a>
    @endif
@else
    <p>Você não tem permissão para visualizar esta página.</p>
@endif

@endsection