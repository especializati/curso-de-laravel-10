<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
    CKEDITOR.replace( 'editor' );
    </script>
    <title>master</title>
</head>
<body>

<!-- Cabeçalho -->
<header>
    <!-- Conteúdo do cabeçalho -->
    <div class="header-content">
        <!-- Título do Buffet -->
        <h1>Eclair Buffet</h1>
    </div>
</header>

<!-- Container principal -->
<nav>
    @if(auth()->user())
<section class="nav-buttons">
    <a href="{{route('home')}}">Home</a>
    @if(auth()->user()->acesso == 'A' ||auth()->user()->acesso == 'C')
    <a href="{{route('aniversarios.index')}}">Festas</a>
    @endif
    @if(auth()->user()->acesso == 'B')
    <a href="{{route('convidados.index')}}">Convidados</a>
    <a href="{{route('aniversarios.create')}}">Fazer Solicitação</a>
    @endif
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
    </form>
</section>
@else
<section class="login-buttons-section">
<a href="{{ route('login') }}" class="btn-login">Login</a>
<a href="{{ route('register') }}" class="btn-register">Register</a>
</section>
@endif
</nav>
<div class='container'>
    @yield('content')
</div>

</body>
</html>
