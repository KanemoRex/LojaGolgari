<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossos Produtos</title>
    <!-- Styles -->
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
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
        }
        .navbar {
            background-color: #333;
            padding: 10px;
            text-align: center;
            margin-bottom: 20px;
        }
        .navbar a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .product {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 20px;
            flex-basis: calc(30% - 20px); /* Define a largura de cada produto */
        }
        .product img {
            max-width: 100px;
            margin-right: 20px;
        }
        .product-info {
            flex: 1;
        }
        .product-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .product-description {
            margin-bottom: 10px;
        }
        .product-price {
            font-size: 16px;
            color: #007bff;
        }
        h1 {
            color: #fff; /* Cor do texto do <h1> alterada para branco */
            font-size: 2.5rem; /* Tamanho do texto do <h1> */
            margin-bottom: 20px; /* Espaçamento abaixo do título */
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="/">Inicio</a>
        <a href="artefatos">Artefatos</a>
        <a href="contato">Contato</a>
        <a href="tipo">Tipo</a> <!-- Novo botão Tipo -->
        <a href="comparacao">Comparação</a>
        <a href="login">Login</a>
    </div>

    <div class="container">
        <h1>Nossos Produtos</h1>

        <div class="product-container">
            <!-- Produto 1 -->
            <div class="product">
                <img src="images/espa.jpg" alt="Product Image">
                <div class="product-info">
                    <div class="product-title">Espátula de Mithril</div>
                    <div class="product-description">Item Maravilhoso incomum;</div>
                    <div class="product-description">Alguém por algum motivo decidiu usar um dos metais mais raros do mundo na produção de uma espátula de cozinha. Ela não faz nada de muito especial, a não ser ter uma resistência absurdamente grande e um peso quase nulo. Mas você pode se gabar por ter uma espátula muito cara.</div>
                    <div class="product-price">500 po</div>
                </div>
            </div>

            <!-- Produto 2 -->
            <div class="product">
                <img src="images/fluxo.jpg" alt="Product Image">
                <div class="product-info">
                    <div class="product-title">Dispositivo de Fluxo</div>
                    <div class="product-description">Item maravilhoso raro;</div>
                    <div class="product-description">Um poderosíssimo item mágico que consegue redirecionar o fluxo da mana comum, transformando-a em mana selvagem. Isso gera os mais diversos efeitos, então use com sabedoria. Ao ativar o dispositivo, algumas dessas coisas podem acontecer por causa da magia selvagem, incluindo: reestruturação de buracos faciais, transformações parciais involuntárias, transformação da voz falada por acordes musicais de uma viola, crescimento exponencial de trepadeiras, surgimento de fadas dragão, calvície instantânea e peidos perfumados.</div>
                    <div class="product-price">250 po</div>
                </div>
            </div>

            <!-- Produto 3 -->
            <div class="product">
                <img src="images/devo.jpg" alt="Product Image">
                <div class="product-info">
                    <div class="product-title">Espada Devoradora</div>
                    <div class="product-description">Arma mágica muito rara;</div>
                    <div class="product-description">Essa espada mágica na verdade é um mímico dócil, que devora principalmente cadáveres de mortos. No entanto, é preciso mantê-lo alimentado, se não quiser que senhorinhas donas de gato furiosas comecem a bater na sua porta.</div>
                    <div class="product-price">400 po</div>
                </div>
            </div>

            <!-- Produto 4 -->
            <div class="product">
                <img src="images/pena.jpg" alt="Product Image">
                <div class="product-info">
                    <div class="product-title">Armadura de Queda Suave</div>
                    <div class="product-description">Armadura mágica incomum;</div>
                    <div class="product-description">O nome é só de praxe, essa armadura possui um sistema de airbags poderoso na parte traseira da calça, permitindo que o usuário, ao cair de bunda de altas posições, saia ileso.</div>
                    <div class="product-price">150 po</div>
                </div>
            </div>

            <!-- Produto 5 -->
            <div class="product">
                <img src="images/fogo.jpg" alt="Product Image">
                <div class="product-info">
                    <div class="product-title">Varinha de Fogos</div>
                    <div class="product-description">Foco arcano raro;</div>
                    <div class="product-price">200 po</div>
                    <div class="product-description">Uma varinha de fogos de artifício. Todos podem dizer que é inofensiva até levar uma dessas no rosto. Tenho que dizer que a experiência não é das melhores.</div>
                </div>
            </div>

            <!-- Produto 6 -->
            <div class="product">
                <img src="images/dora.jpg" alt="Product Image">
                <div class="product-info">
                    <div class="product-title">Anéis de Distanciamento Social</div>
                    <div class="product-description">Item mágico maravilhoso lendário;</div>
                    <div class="product-price">1000 po</div>
                    <div class="product-description">Caso você odeie MUITO alguém, você pode dar um desses anéis para essa pessoa e o outro fica com você. Sempre que estiver perto da outra pessoa com esse anel, o mesmo vai apontar a melhor rota de saída ou uma janela pela qual a pessoa pode ser atirada.</div>
                </div>
            </div>

            <!-- Produto 7 -->
            <div class="product">
                <img src="images/espada.jpg" alt="Product Image">
                <div class="product-info">
                    <div class="product-title">Espada Imaginária de Kerdek</div>
                    <div class="product-description">Arma mágica muito rara;</div>
                    <div class="product-price">400 po</div>
                    <div class="product-description">Essa espada imaginária não tem peso, não causa suspeitas, não tem uma forma e nem mesmo pode ser tocada. Você pode usar essa espada para causar dano imaginário em seus inimigos, algo que todos são vulneráveis (em seus sonhos pelo menos).</div>
                </div>
            </div>

            <!-- Produto 8 -->
            <div class="product">
                <img src="images/bota.jpg" alt="Product Image">
                <div class="product-info">
                    <div class="product-title">Botas Solares</div>
                    <div class="product-description">Armadura mágica lendária;</div>
                    <div class="product-price">5000 po</div>
                    <div class="product-description">Essas botas não queimam em contato com o sol ou altas temperaturas, somente as botas no entanto, o usuário ainda sente as penalidades do calor. E não que tenha muita coisa pra se ver no sol ou como você chegar lá para início de conversa.</div>
                </div>
            </div>

            <!-- Produto 9 -->
            <div class="product">
                <img src="images/tomo.jpg" alt="Product Image">
                <div class="product-info">
                    <div class="product-title">Tomo do Esclarecimento</div>
                    <div class="product-description">Foco arcano lendário;</div>
                    <div class="product-price">1500 po</div>
                    <div class="product-description">Uma vez por dia você pode usar a magia "Quer que eu Desenhe?" usando este item, onde você explica os míseros detalhes para um acéfalo entender como a PORCARIA DO PLANO FUNCIONA.</div>
                </div>
            </div>

            <!-- Produto 10 -->
            <div class="product">
                <img src="images/tpa.jpg" alt="Product Image">
                <div class="product-info">
                    <div class="product-title">Tapa-olho da Cegueira</div>
                    <div class="product-description">Item mágico maravilhoso incomum;</div>
                    <div class="product-price">50 po</div>
                    <div class="product-description">Enquanto estiver usando este tapa-olho sob um dos olhos, este olho não conseguirá enxergar. Faça um para cada.</div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
