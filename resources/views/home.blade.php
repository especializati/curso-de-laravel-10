@extends('master')

@section('title', 'Home')

@section('content')
    <!-- Seção de Destaque -->
    <section class="highlight-section">
        <h2>Bem-vindo ao Eclair Buffet</h2>
        <p>Encante-se com nossas deliciosas festas sob medida para tornar seu evento inesquecível.</p>
    </section>

    <!-- Galeria de Imagens -->
    <section class="gallery-section">
        <h2>Galeria de Pratos</h2>
        <div class="image-gallery">
            <!-- Adicione suas imagens aqui -->
            <img src="{{ asset('https://storage.alboom.ninja/sites/3947/albuns/251177/publicacao-site-29.jpg?1525359493') }}" alt="Prato 1" style="max-width: 100%; height: auto;">
        </div>
    </section>

    <!-- Informações sobre Serviços -->
    <section class="services-section">
        <h2>Nossos Serviços</h2>
        <div class="services-list">
            <div class="service-item">
                <!-- Adicione seus serviços aqui -->
            </div>
        </div>
    </section>

@endsection

<style>
    /* Adicione estilos específicos conforme necessário */
    body {
        margin: 0;
        padding: 0;
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

    /* Botão de Login */
    .btn-login {
        display: inline-block;
        padding: 10px 20px;
        background-color: #ffc107;
        color: #343a40;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        margin-top: 20px;
    }

    /* Botão de Register */
    .btn-register {
        display: inline-block;
        padding: 10px 20px;
        background-color: #28a745; /* Cor de fundo do botão Register */
        color: #ffffff; /* Cor do texto do botão Register */
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        margin-top: 20px;
        margin-left: 10px; /* Espaçamento entre os botões */
    }
</style>
