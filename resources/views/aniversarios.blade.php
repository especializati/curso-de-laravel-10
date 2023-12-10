@extends('master')

@section('content')

@if(auth()->user())
    @foreach($aniversarios as $aniversario)
    <li>
            {{ $aniversario->nome_aniversariante }}
            | Idade: {{ $aniversario->idade_aniversariante }}
            | Convidados: {{ $aniversario->n_convidados }}
            | Pacote Pedido: {{ $aniversario->pedido }}
            | Data: {{ $aniversario->data }}
            | Confirmado: {{$aniversario->estado}}
            @if(auth()->user()->acesso == 'A')
            <form action="{{route('aniversarios.update', ['aniversario' => $aniversario->id])}}" method="POST">
                @csrf    
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="estado" value="true"></form>
                <button type="submit">Confirmar</button>
            @endif

            
        </li>
    @endforeach
    @if(auth()->user()->acesso == 'B')
    <a href="{{ route('aniversarios.create') }}">Fazer pedido</a>
    @endif
@else
    <p>Você não tem permissão para visualizar esta página.</p>
@endif

@endsection