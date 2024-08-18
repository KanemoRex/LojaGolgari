<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('{{ asset('images/Media2.jpg') }}'); /* Adiciona a imagem de fundo */
            background-size: cover; /* Cobre toda a área da página */
            background-position: center; /* Centraliza a imagem */
            color: #fff; /* Cor do texto alterada para branco */
        }
        .container {
            max-width: 400px;
            margin: 100px auto; /* Adiciona espaçamento superior */
            padding: 20px;
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.9); /* Fundo semi-transparente */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: #333; /* Cor do texto interna */
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: 500;
            margin-bottom: 8px;
            display: block;
            color: #333; /* Cor dos labels */
        }
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .btn {
            background-color: #ff6600;
            color: #fff;
            padding: 12px 24px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            text-align: center;
            transition: background-color 0.3s ease;
            cursor: pointer;
            width: 100%;
            box-sizing: border-box;
        }
        .btn:hover {
            background-color: #e64d00;
        }
        .text-center {
            text-align: center;
        }
        .text-danger {
            color: #ff0000;
        }
        nav {
            background-color: rgba(0, 0, 0, 0.8); /* Fundo semi-transparente para o menu */
            padding: 10px;
            text-align: center;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            font-weight: 500;
        }
        nav a:hover {
            text-decoration: underline;
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

    <div class="container">
        <div class="header">
            <h2>Faça login</h2>
        </div>

        <form action="{{ route('login.authenticate') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                @if ($errors->any())
                    <div class="text-danger">
                        {{ $errors->first() }}
                    </div>
                @endif
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn">Entrar</button>
            </div>
        </form>
    </div>
</body>
</html>
