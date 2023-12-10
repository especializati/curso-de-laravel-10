@extends('master') 

@section('content')
    @if(auth()->user())
    <a href="{{route('convidados.createfesta', ['id_festa' => auth()->user()->id])}}">Formulario Convidados</a>
        <h1>Lista de Convidados para a Reserva #{{ auth()->user()->id }}</h1> {{--id do user é o mesmo do id da festa dele--}}

        <ul>
            @foreach($convidados as $convidado)
                @if(auth()->user()->id == $convidado->id_festa)
                <li>
                    
                    {{ $convidado->name }} | {{ $convidado->idade }} anos
                    <form action="{{route('convidados.destroy', ['convidado' => $convidado->id])}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="id" value="{{$convidado->id}}">
                        <button type="submit">Remover</button>
                    </form>
                </li>
                @endif
                
            @endforeach
        </ul>
    @else
        <p>Você não tem permissão para acessar a lista de convidados.</p>
    @endif

@endsection
