@extends('master')

@section('title', 'Home')

@section('content')
    <!-- Seção de Destaque -->
    <section class="highlight-section">
        <h2>Bem-vindo ao Eclair Buffet</h2>
        <p>É com imenso prazer que abrimos nossas portas para oferecer experiências culinárias excepcionais, marcadas por qualidade, criatividade e dedicação. No Eclair Buffet, acreditamos que cada comemoração merece um toque exclusivo, e estamos aqui para tornar seus momentos especiais verdadeiramente inesquecíveis. Seja bem-vindo a um mundo de sabores e celebrações no Eclair Buffet!</p>
    </section>

    
    <section class="gallery-section">
        <h2></h2>
        <div class="image-gallery">
            
            <img src="{{ asset('https://storage.alboom.ninja/sites/3947/albuns/251177/publicacao-site-29.jpg?1525359493') }}" alt="Prato 1" style="max-width: 100%; height: auto;">
        </div>
    </section>

  
    <section class="services-section">
        <h2>Nossos Serviços</h2>
        <p>Nosso serviço é dedicado a proporcionar experiências gastronômicas excepcionais, customizadas de acordo com os desejos de nossos clientes. De festas íntimas a eventos grandiosos, cada detalhe é cuidadosamente planejado para criar uma atmosfera única. Descubra o prazer de celebrar com sabores deliciosos e um toque especial que tornará seu evento verdadeiramente memorável.</p>
        <div class="services-list">
            <div class="service-item">
               
            </div>
        </div>
    </section>

    
    
@endsection