@extends('master')


@section('content')
<h1>bala</h1>
@if(auth()->user())
    <p>Admin</p>
@endif
    
@endsection