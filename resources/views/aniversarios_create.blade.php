@extends('master')

@section('content')

@if (session()->has('message'))
    <div class="alert">{{ session()->get('message') }}</div>
@endif

@if (auth()->check())
    <p>Olá, {{ auth()->user()->name }}!</p>
@endif

<form action="{{ route('aniversarios.store') }}" method='POST' class="create-party-form">
    @csrf
    <div class="form-group">
        <label for="nome_aniversariante">Nome do Aniversariante</label>
        <input type="text" name='nome_aniversariante' required>
    </div>
    <div class="form-group">
        <label for="idade_aniversariante">Idade do Aniversariante</label>
        <input type="number" name='idade_aniversariante' required>
    </div>
    <div class="form-group">
        <label for="n_convidados">Número de Convidados</label>
        <input type="number" name='n_convidados' required>
    </div>
    <div class="form-group">
        <label for="pedido">Pedido</label>
        <textarea name="editor" id="editor" required></textarea>
    </div>
    <input type="hidden" name="id_festa" value="{{ auth()->user()->id }}">
    <div class="form-group">
        <label for="data">Data</label>
        <input type="date" name='data' required>
    </div>

    <!-- Adicione a imagem de comidas aqui -->
    <div class="form-group">
        <label for="comidas_img">Imagem de Comidas</label>
        <img src="https://img.freepik.com/fotos-gratis/arranjo-de-comida-deliciosa-de-alto-angulo_23-2149617130.jpg?size=626&ext=jpg&ga=GA1.1.1880011253.1699142400&semt=ais" alt="Comidas" style="max-width: 100%;">
    </div>

    <!-- Adicione a imagem de bebidas aqui -->
    <div class="form-group">
        <label for="bebidas_img">Imagem de Bebidas</label>
        <img src="https://casaefesta.com/wp-content/uploads/2021/06/bebidas-para-servir-festa-infantil.jpg" alt="Bebidas" style="max-width: 100%;">
    </div>

    <button type="submit" class="btn-create-party">Criar festa</button>
</form>

@endsection
