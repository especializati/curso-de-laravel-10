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

<div class="pacote">
    <h2>Pacote 1</h2>
    <div class="pacote-details">
        <div class="pacote-info">
            <ul>
                <li>Bebidas:
                    <ul>
                        <li>Cerveja</li>
                        <li>Refrigerante</li>
                        <!-- Adicione outras bebidas conforme necessário -->
                    </ul>
                </li>
                <li>Comidas:
                    <ul>
                        <li>jantar completo</li>
                        <li>diversas sobremesas</li>
                        <!-- Adicione outras comidas conforme necessário -->
                    </ul>
                </li>
                <li>Preço por pessoa: R$ 70,00</li>
            </ul>
        </div>
        <div class="pacote-photos">
            <!-- Espaço para 2 fotos do Pacote 1 -->
            <img src="{{ asset('https://i.ytimg.com/vi/HwHaqjmUp8Q/maxresdefault.jpg') }}" alt="Bebidas">
            <img src="{{ asset('https://img.freepik.com/fotos-gratis/arranjo-de-comida-deliciosa-de-alto-angulo_23-2149617130.jpg?size=626&ext=jpg&ga=GA1.1.1880011253.1699142400&semt=ais') }}" alt="Comidas">
        </div>
        <div>
            <a href="{{ route('editar_pacote', ['id' => 1]) }}" class="btn btn-primary btn-editar">Editar</a>
            <form action="{{ route('excluir_pacote',['id' => 1])}}" method="DELETE" class="deletar" >
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-excluir">Excluir</button>
            </form>
        </div>
    </div>
</div>

<div class="pacote">
    <h2>Pacote 2</h2>
    <div class="pacote-details">
        <div class="pacote-info">
            <ul>
                <li>Bebidas:
                    <ul>
                        <li>Suco de varios sabores</li>
                        <li>Água</li>
                        <!-- Adicione outras bebidas conforme necessário -->
                    </ul>
                </li>
                <li>Comidas:
                    <ul>
                        <li>Comida japonesa</li>
                        <!-- Adicione outras comidas conforme necessário -->
                    </ul>
                </li>
                <li>Preço por pessoa: R$ 50,00</li>
            </ul>
        </div>
        <div class="pacote-photos">
            <!-- Espaço para 2 fotos do Pacote 2 -->
            <img src="{{ asset('https://media.gazetadopovo.com.br/2023/01/11183609/WhatsApp-Image-2023-01-11-at-18.34.50-873x540.jpeg') }}" alt="Comidas">
            <img src="{{ asset('https://casaefesta.com/wp-content/uploads/2021/06/bebidas-para-servir-festa-infantil.jpg') }}" alt="Bebidas">
        </div>
        <div>
        <a href="{{ route('editar_pacote', ['id' => 1]) }}" class="btn btn-primary btn-editar">Editar</a>
            <form action="{{ route('excluir_pacote',['id' => 1])}}" method="DELETE" class="deletar" >
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Excluir Pacote</button>
</form>

        </div>
    </div>
</div>

@endsection
