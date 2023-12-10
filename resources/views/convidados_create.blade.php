@extends('master')


@section('content')
    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif


    <form action="{{ route('convidados.store') }}" method="POST">
        @csrf
        <li>
            <label for="name">Nome</label>
            <input type="text" name="name">
        </li>
        <li>
            <label for="idade_aniversariante">Idade</label>
            <input type="number" name="idade">
        </li>
        <li>
            <label for="cpf">CPF</label>
            <input type="text" name="cpf">
        </li>
        <input type="hidden" name="id_festa" value="{{ $id_festa }}">
        <button type="submit">Confirmar Presença</button>
    </form>

    <!-- Botão para copiar o link -->
    <button id="copyLink">Copiar Link do Formulário</button>

    <script>
        // Função para copiar o link
        function copyLink() {
            var linkInput = document.createElement('input');
            linkInput.value = '{{ route('convidados.create') }}';
            document.body.appendChild(linkInput);
            linkInput.select();
            document.execCommand('copy');
            document.body.removeChild(linkInput);
            alert('Link copiado para a área de transferência!');
        }

        // Adiciona um listener para o botão
        document.getElementById('copyLink').addEventListener('click', copyLink);
    </script>
@endsection
