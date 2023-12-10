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
            | Situação:   @if($aniversario->estado == false) Pendente @else Confirmado     @endif
            @if(auth()->user()->acesso == 'A')
            <form action="{{route('aniversarios.update', ['aniversario' => $aniversario->id_festa])}}" method="POST">
                @csrf  
                <button type="submit">Confirmar Festa</button>  
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="estado" value='1'></form>
            </form>
            <form action="{{route('aniversarios.destroy', ['aniversario' => $aniversario->id_festa])}}" method="POST">
                @csrf  
                <button type="submit">Cancelar</button>  
                <input type="hidden" name="_method" value="DELETE">
            </form>
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