<!-- resources/views/visualizar_pacote.blade.php -->

@extends('master') <!-- Certifique-se de que 'master' seja o nome correto do seu layout master.blade.php -->

@section('content')

<style>
    .pacote {
        margin-bottom: 30px;
        border: 1px solid #ddd;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .pacote h2 {
        color: #333;
        font-size: 24px;
        margin-bottom: 15px;
    }

    .pacote-details {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .pacote-info {
        flex: 1;
        max-width: 60%;
    }

    .pacote-info ul {
        list-style: none;
        padding: 0;
    }

    .pacote-info ul li {
        margin-bottom: 10px;
    }

    .pacote-photos {
        flex: 1;
        max-width: 40%;
        text-align: center;
    }

    .pacote-photos img {
        max-width: 100%;
        border-radius: 8px;
        margin-bottom: 10px;
    }

    .btn-editar,
    .btn-excluir {
        display: inline-block;
        margin-right: 10px;
    }
</style>

@foreach($pacotes as $pacote)
<div class="pacote">
    <h2>Pacote {{$pacote->$id}}</h2>
    <div class="pacote-details">
        <div class="pacote-info">
            <ul>
                <li>Bebidas:
                    <ul>
                        <li>{{$pacote->$bebidas}}</li>
                        <!-- Adicione outras bebidas conforme necessário -->
                    </ul>
                </li>
                <li>Comidas:
                    <ul>
                        <li>{{$pacote->$comidas}}</li>
                        <!-- Adicione outras comidas conforme necessário -->
                    </ul>
                </li>
                <li>Preço por pessoa:{{$pacote->$preco_pessoa}}</li>
            </ul>
        </div>
        <div class="pacote-photos">
            <!-- Espaço para 2 fotos do Pacote 1 -->
            <img src="{{ asset('https://i.ytimg.com/vi/HwHaqjmUp8Q/maxresdefault.jpg') }}" alt="Bebidas">
            <img src="{{ asset('https://img.freepik.com/fotos-gratis/arranjo-de-comida-deliciosa-de-alto-angulo_23-2149617130.jpg?size=626&ext=jpg&ga=GA1.1.1880011253.1699142400&semt=ais') }}" alt="Comidas">
        </div>
        <div>
            <a href="{{ route('pacotes.edit', ['id' => $pacote->id]) }}" class="btn btn-primary btn-editar">Editar</a>
            <form action="{{ route('excluir_pacote',['id' => 1])}}" method="DELETE" class="deletar" >
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-excluir">Excluir</button>
            </form>
        </div>
    </div>
</div>
@endforeach

@endsection
