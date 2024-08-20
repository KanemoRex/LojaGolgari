<!DOCTYPE html>
<html>
<head>
    <title>Comparação de Lojas</title>
    <style>
        body {
            font-family: 'figtree', sans-serif;
            color: #fff;
            margin: 0;
            padding: 0;
            background-image: url('{{ asset('images/Media2.jpg') }}');
            background-size: cover;
            background-position: center;
        }
        nav {
            background-color: #333;
            padding: 10px;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        .chart-description {
            margin: 20px;
            padding: 10px;
            background-color: #444;
            border-radius: 8px;
            font-size: 16px;
            color: #fff;
        }
    </style>
</head>
<body>
    <nav>
        <a href="/">Início</a>
        <a href="artefatos">Artefatos</a>
        <a href="contato">Contato</a>
        <a href="tipo">Tipo</a>
        <a href="comparacao">Comparação</a>
        <a href="login">Login</a>
    </nav>
    <div class="chart-description">
        <h2>Comparação de Desempenho</h2>
        <p>Este gráfico compara o desempenho de vendas entre nossa loja e dois concorrentes ao longo dos últimos sete meses. A série Golgari Delivery representa nossos próprios dados de vendas, enquanto Loja do Tico e Artefatos do nos mostram o desempenho dos nossos principais concorrentes. Os valores são apresentados em milhares de dólares, o que permite visualizar rapidamente as diferenças de desempenho e identificar tendências sazonais.</p>
    </div>
</body>
</html>
