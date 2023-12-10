<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script>
        CKEDITOR.replace('editor');
    </script>
    <title>master</title>
</head>

<body>

    <!-- Barra de Navegação -->
    <nav class="navbar">
        <!-- Conteúdo da barra de navegação -->
        <div class="navbar-content">
            <!-- Título do Buffet -->
            <h3 class="title-navbar">Eclair Buffet</h3>

            <!-- Botões da Navbar -->
            @if(auth()->user())
                <div class="navbar-buttons">
                    <a href="{{route('home')}}">Home</a>
                    @if(auth()->user()->acesso == 'A' || auth()->user()->acesso == 'C')
                        <a href="{{route('aniversarios.index')}}">Festas</a>
                         <!-- Adicione o botão de Pacotes -->
                         <a href="{{route('visualizar_pacote')}}">visualizar pacotes</a>
                    @endif
                    @if(auth()->user()->acesso == 'B')
                        <a href="{{route('convidados.index')}}">Convidados</a>
                        <a href="{{route('aniversarios.create')}}">Fazer Solicitação</a>
                        <!-- Adicione o botão de Lista de Satisfação -->
                        <a href="{{route('satisfacao.lista')}}">Lista de Satisfação</a>
                    @endif
                    @if(auth()->user()->acesso == 'O')
                        <a href="{{route('entrada_festa')}}">Entrada Festa</a>
                    @endif
                    @if(auth()->user()->acesso == 'O')
                        <a href="{{ route('proximas_festas') }}">Próximas Festas</a>
                    @endif
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            @else
                <!-- Botões de Login e Registro -->
                <div class="navbar-buttons">
                    <a href="{{ route('login') }}" class="btn-login">Login</a>
                    <a href="{{ route('register') }}" class="btn-register">Registrar</a>
                </div>
            @endif
        </div>
    </nav>

    <!-- Container principal -->
    <div class='container'>
        @yield('content')
    </div>

</body>

</html>
