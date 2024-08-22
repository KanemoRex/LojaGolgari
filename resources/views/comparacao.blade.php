<!DOCTYPE html>
<html>
<head>
    <title>Comparação de Lojas</title>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <style>
        body {
            font-family: 'figtree', sans-serif;
            color: #fff; /* Cor do texto em branco */
            margin: 0;
            padding: 0;
            background-image: url('{{ asset('images/Media2.jpg') }}'); /* Adiciona a imagem de fundo */
            background-size: cover; /* Cobre toda a área da página */
            background-position: center; /* Centraliza a imagem */
        }
        nav {
            background-color: #333;
            padding: 10px;
            text-align: center;
            position: sticky; /* Fixa o nav no topo da página */
            top: 0;
            z-index: 1000; /* Garante que o nav esteja acima de outros conteúdos */
        }
        nav a {
            color: #fff; /* Cor do texto dos links em branco */
            text-decoration: none;
            margin: 0 10px;
        }
        #chart {
            margin: 20px;
        }
        .chart-description {
            margin: 20px;
            padding: 10px;
            background-color: #444; /* Cor de fundo para o texto explicativo */
            border-radius: 8px;
            font-size: 16px;
            color: #fff; /* Cor do texto explicativo em branco */
        }
    </style>
</head>
<body>
    <nav>
        <a href="/">Início</a>
        <a href="artefatos">Artefatos</a>
        <a href="contato">Contato</a>
        <a href="tipo">Tipo</a> <!-- Novo botão Tipo -->
        <a href="comparacao">Comparação</a>
        <a href="login">Login</a>
    </nav>
    <div class="chart-description">
        <h2>Comparação de Desempenho</h2>
        <p>Este gráfico compara o desempenho de vendas entre nossa loja e dois concorrentes ao longo dos últimos sete meses. A série Golgari Delivery representa nossos próprios dados de vendas, enquanto Loja do Tico e Artefatos do Jos mostram o desempenho dos nossos principais concorrentes. Os valores são apresentados em milhares de dólares, o que permite visualizar rapidamente as diferenças de desempenho e identificar tendências sazonais.</p>
    </div>
    <div id="chart"></div>
    <script>
        var options = {
            series: [{
                name: 'Golgari Delivery',
                data: [44, 55, 41, 64, 22, 43, 21]
            }, {
                name: 'Loja do Tico',
                data: [53, 32, 33, 52, 13, 44, 32]
            }, {
                name: 'Artefatos do Jose',
                data: [31, 41, 35, 51, 49, 62, 69]
            }],
            chart: {
                type: 'bar',
                height: 350,
                background: '#222' // Cor de fundo do gráfico para contraste
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                labels: {
                    style: {
                        colors: '#fff', // Cor dos rótulos do eixo X
                        fontSize: '14px'
                    }
                }
            },
            yaxis: {
                title: {
                    text: 'Valores',
                    style: {
                        color: '#fff' // Cor do título do eixo Y
                    }
                },
                labels: {
                    style: {
                        colors: '#fff', // Cor dos rótulos do eixo Y
                        fontSize: '14px'
                    }
                }
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return "$ " + val + " mil";
                    },
                    style: {
                        color: '#fff' // Cor do texto da dica
                    }
                }
            },
            grid: {
                borderColor: '#444' // Cor da grade do gráfico
            },
            legend: {
                labels: {
                    colors: '#fff' // Cor dos rótulos da legenda
                }
            },
            title: {
                text: 'Desempenho de Vendas',
                style: {
                    color: '#fff', // Cor do título do gráfico
                    fontSize: '16px'
                }
            },
            subtitle: {
                text: 'Comparação de nossa loja com concorrentes',
                style: {
                    color: '#fff', // Cor do subtítulo do gráfico
                    fontSize: '14px'
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
</body>
</html>