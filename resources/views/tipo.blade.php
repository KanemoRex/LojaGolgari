<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Seu cabeçalho aqui -->
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css">
</head>
<body>
    <style>
        body {
            font-family: 'figtree', sans-serif;
            color: #fff; /* Alteração da cor do texto */
            margin: 0;
            padding: 0;
            background-image: url('{{ asset('images/Media2.jpg') }}'); /* Adiciona a imagem de fundo */
            background-size: cover; /* Cobre toda a área da página */
            background-position: center; /* Centraliza a imagem */
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 50px;
        }
        .hero-image {
            width: 100%;
            max-width: 800px;
            display: block;
            margin: 0 auto;
        }
        .cta-button {
            display: inline-block;
            background-color: #ff6600;
            color: #fff;
            padding: 12px 24px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 20px;
            border: 2px solid transparent;
            transition: all 0.3s ease;
        }
        .cta-button:hover {
            background-color: #e64d00;
            border-color: #e64d00;
        }
        nav {
            background-color: #333;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        .content {
            text-align: left;
            margin-top: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            color: #000;
            font-size: 16px;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        tr:nth-child(odd) {
            background-color: #f9f9f9;
        }
        tr:nth-child(even) {
            background-color: #ffffff;
        }
        .chart-container {
            background-color: #fff; /* Cor de fundo branco */
            padding: 20px; /* Espaçamento ao redor do gráfico */
            border-radius: 8px; /* Bordas arredondadas */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra leve */
            margin-top: 20px; /* Espaçamento acima do contêiner */
        }
        h1 {
            color: #fff; /* Cor do texto do <h1> alterada para branco */
            font-size: 3rem; /* Aumenta o tamanho do texto do <h1> */
            margin-bottom: 20px; /* Espaçamento abaixo do título */
        }
    </style>
    
    <nav>
        <a href="/">Início</a>
        <a href="/artefatos">Artefatos</a>
        <a href="/contato">Contato</a>
        <a href="/tipo">Tipo</a>
        <a href="/comparacao">Comparação</a>
        <a href="/login">Login</a>
    </nav>
    
    <div class="container">
        <h1>Tipo dos nossos produtos</h1>
        
        <!-- Tabela com os tipos dos itens -->
        <table>
            <tr>
                <th>Tipo</th>
                <th>Descrição</th>
            </tr>
            <tr>
                <td>Maravilhosos</td>
                <td>Itens de formatos variados, com propriedades e funções variadas, sem um motivo específico ou propósito claro.</td>
            </tr>
            <tr>
                <td>Armas mágicas</td>
                <td>Armas tocadas pela magia de poderosos ferreiros e magos, dão um poder sobrenatural para seus portadores, servem especialmente para o combate.</td>
            </tr>
            <tr>
                <td>Armaduras mágicas</td>
                <td>Vestimentas criadas como o contraponto de armas mágicas, capazes de resistir e proteger o usuário de diversas formas contra os perigos externos.</td>
            </tr>
            <tr>
                <td>Focos Arcanos</td>
                <td>Itens feitos para a manipulação da magia e da lógica, com pequenos toques de estranheza aqui e ali que auxiliam o conjurador a projetar feitiços poderosos.</td>
            </tr>
        </table>
        
        <!-- Gráfico dos tipos de itens mais vendidos com fundo branco -->
        <div class="chart-container">
            <div id="chart">{!! $chart->container() !!}</div>
        </div>
        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    {!! $chart->script() !!}
</body>
</html>
