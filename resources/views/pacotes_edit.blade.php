@extends('master')

@section('content')

<div>
    <h1>ID: {{$pacote->id}}</h1>
    <form action="{{route.update}}" method="post">
    
    <button type="submit">Editar</button>
    </form>

</div>

@endsection