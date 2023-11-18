<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Eclair Buffet</title>
    <style>
        /* Reset de estilos padrão */
        body {
            margin: 0;
            padding: 0;
        }

        /* Estilos gerais do corpo */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa; /* Cor de fundo do corpo */
            color: #343a40; /* Cor do texto padrão */
        }

        /* Estilos do cabeçalho */
        header {
            background-color: #ffc107; /* Cor de fundo do cabeçalho */
            text-align: center;
            padding: 30px 0;
        }

        /* Conteúdo do cabeçalho */
        .header-content {
            max-width: 800px;
            margin: 0 auto;
        }

        /* Título do Buffet */
        h1 {
            font-size: 2.5em;
            margin: 0;
            color: #343a40; /* Cor do texto do título */
        }

        /* Container principal */
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff; /* Cor de fundo do conteúdo principal */
            border-radius: 8px; /* Bordas arredondadas do container */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
        }

        /* Adicione outros estilos conforme necessário */
    </style>
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
<div class='container'>
    <!-- Conteúdo dinâmico da página -->
    @yield('content')
</div>

</body>
</html>
