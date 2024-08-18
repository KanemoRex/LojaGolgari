<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artefatos Incríveis</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <style>
        body {
            font-family: 'figtree', sans-serif;
            color: #fff; /* Cor do texto ajustada para branco */
            margin: 0;
            padding: 0;
            background-image: url('{{ asset('images/Media2.jpg') }}'); /* Adiciona a imagem de fundo */
            background-size: cover; /* Cobre toda a área da página */
            background-position: center; /* Centraliza a imagem */
            font-size: 20px; /* Aumenta o tamanho da fonte globalmente */
            line-height: 1.6; /* Ajusta o espaçamento entre linhas para melhor legibilidade */
        }
        nav {
            background-color: #333;
            padding: 15px;
            text-align: center;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000; /* Garante que o menu fique acima de outros elementos */
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-size: 20px; /* Ajusta o tamanho da fonte dos links do menu */
            font-weight: bold; /* Fonte em negrito */
        }
        nav a:hover {
            text-decoration: underline; /* Adiciona sublinhado ao passar o mouse */
        }
        .gif-banner {
            width: 100%;
            height: 500px; /* Ajuste a altura do GIF conforme necessário */
            object-fit: cover; /* Ajusta o conteúdo do GIF para cobrir o elemento */
            display: block;
            margin-top: 80px; /* Espaçamento para separar da barra de navegação */
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 30px;
            display: grid;
            grid-template-columns: 1fr 1fr; /* Divide em duas colunas */
            gap: 30px; /* Espaçamento entre os elementos */
        }
        .header {
            text-align: left;
            margin-bottom: 30px;
            grid-column: span 2; /* Ocupa duas colunas */
        }
        .header h1, .header p {
            color: #fff; /* Cor do texto ajustada para branco */
            font-weight: bold; /* Fonte em negrito */
        }
        .hero-image {
            width: 100%;
            display: block;
            margin: 0 auto;
            border-radius: 10%; /* Adição de borda arredondada à imagem */
        }
        .cta-button {
            display: inline-block;
            background-color: #ff6600;
            color: #fff;
            padding: 15px 30px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 20px;
            border: 2px solid transparent;
            transition: all 0.3s ease;
            font-size: 20px; /* Ajusta o tamanho da fonte do botão */
            text-align: center; /* Alinha o texto no centro do botão */
        }
        .cta-button:hover {
            background-color: #e64d00;
            border-color: #e64d00;
        }
        .content, .fund, .more-content {
            color: #fff; /* Cor do texto ajustada para branco */
            font-weight: bold; /* Fonte em negrito */
        }
        .fund {
            margin-top: 5%; /* Margem superior aumentada para separar do cabeçalho */
            grid-column: span 2; /* Ocupa duas colunas */
        }
        .more-content {
            margin-top: 30px; /* Margem superior para separar os blocos */
        }
    </style>
</head>
<body>
    <nav>
        <a href="/">Início</a>
        <a href="/artefatos">Artefatos</a>
        <a href="/contato">Contato</a>
        <a href="/tipo">Tipo</a>
        <a href="/comparacao">Comparação</a>
        <a href="/login">Login</a>
    </nav>
    <img src="{{ asset('images/ave.gif') }}" alt="Banner GIF" class="gif-banner"> <!-- Adiciona o GIF -->
    <div class="container">
        <div class="header">
            <h1 id="inicio">Bem-Vindo à Golgari Delivery</h1>
            <p>A casa Oblikuo tem orgulho de apresentar Golgari Delivery. Uma forma segura de fazer negócio de 
                itens mágicos de valor só conhecido por magos, ferreiros e mestres de guilda de todos os
                 planos de existência.</p>
        </div>
        <div>
            <img src="{{ asset('images/hero.jpg') }}" alt="Artefatos Incríveis" class="hero-image">
        </div>
        <div class="content">
            <h2>Uma pequena Lenda</h2>
            <p>Em um reino chamado OOpa, a loja Golgari Delivery oferecia artefatos mágicos poderosos. Sir Gareth e a feiticeira Elara buscaram esses artefatos para suas missões. Equipados com uma espada encantada e um cajado mágico, enfrentaram desafios e vilões perigosos. Com coragem, protegeram o reino, trazendo esperança. Ao retornar à loja, agradeceram pelos artefatos que os ajudaram. Sua história tornou-se uma lenda inspiradora.</p>
        </div>
        <div class="content">
            <h2>Sobre nós</h2>
            <p>Garantimos a entrega segura dos itens, desde o mais volátil até os mais esquisitos. Nossos entregadores da casa Dimir são das mais variadas espécies e tamanhos, garantimos (com certo grau de violência) uma certeza na compra e na venda das nossas variadas maravilhas.</p>
            <p>Aproveite nossos serviços, compre com segurança, escolha Golgari Delivery.</p>
        </div>
        <div class="fund">
            <h2>Fundadores</h2>
            <p>Conheça os dois fundadores visionários por trás da Golgari Delivery:</p>
            <ul>
                <li><strong>Lord Bata:</strong> Mestre em magia obscura e encantamentos, Lord Bata é o cérebro por trás dos artefatos mágicos oferecidos pela loja.</li>
                <li><strong>Lord Kanemo:</strong> Habilidoso em manipulação e estratégia, Lord Kanemo é responsável pela logística e segurança das entregas dos artefatos.</li>
            </ul>
        </div>
        <div class="more-content">
            <h2>Nossos Produtos</h2>
            <p>Oferecemos uma ampla variedade de artefatos mágicos, desde armas encantadas a poções raras. Cada item é meticulosamente selecionado para garantir a mais alta qualidade e eficácia em suas aventuras.</p>
        </div>
        <div class="more-content">
            <h2>Contato</h2>
            <p>Se você tiver qualquer dúvida ou precisar de assistência, não hesite em nos contatar. Nossa equipe está disponível 24 horas por dia para ajudar você a encontrar o artefato mágico perfeito para suas necessidades.</p>
        </div>
        <div class="more-content">
            <h2>Depoimentos</h2>
            <p>"Os artefatos da Golgari Delivery são incríveis! Eles me ajudaram a vencer muitos desafios em minhas aventuras." - Sir Gareth</p>
            <p>"A qualidade e a segurança da entrega são incomparáveis. Recomendo a todos os aventureiros." - Feiticeira Elara</p>
        </div>
    </div>
</body>
</html>
