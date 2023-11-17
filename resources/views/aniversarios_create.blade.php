@extends('master')

@section('content')

<form action="{{'aniversarios.store'}}" method='post'>
    <input type="text" name='nome_aniversariante'>
    <input type="text" name='n_convidados'>
    <input type="text" name='pedido'>

</form>


@endsection('content')