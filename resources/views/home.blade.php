@extends('master')


@section('content')
<h1>bala</h1>
@if(auth()->user())
    <h2>{{auth()->user()->name}}</h2>
@endif
    
@endsection