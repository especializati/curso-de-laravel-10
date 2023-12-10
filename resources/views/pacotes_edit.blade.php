@extends('master')

@section('content')

<div>
    @if(session()->has('msg'))
        {{session()->get('msg')}}
    @endif

    <h1>PACOTE ID: {{$pacote->id}}</h1>
    <form action="{{route('pacotes.update', ['pacote' => $pacote->id] )}}" method="post">
    @csrf    
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
        <label for="comidas">Comidas</label>
        <textarea name="comidas" id="editor"></textarea>
    </div>
    <div class="form-group">
        <label for="bebidas">Bebidas</label>
        <textarea name="bebidas" id="editor2"></textarea>
    </div>
    <div class="form-group">
        <label for="comidas">Preço Por Pessoa</label>
        <input type="number" step="0.1" name="preco_pessoa" id="preco_pessoa">
    </div>    
    <button type="submit">Editar</button>
    </form>

</div>

<script>
    ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    ClassicEditor
            .create( document.querySelector( '#editor2' ) )
            .catch( error => {
                console.error( error );
            } );



</script>

@endsection