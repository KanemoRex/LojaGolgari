<!DOCTYPE html>
<html>
<head>
    <title>Comparação de Lojas</title>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
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
        #chart {
            margin: 20px;
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
        <p>Este gráfico compara o desempenho de vendas entre nossa loja e dois concorrentes ao longo dos últimos sete meses. A série Golgari Delivery representa nossos próprios dados de vendas, enquanto Loja do Tico e Artefatos do Jos mostram o desempenho dos nossos principais concorrentes. Os valores são apresentados em milhares de dólares, o que permite visualizar rapidamente as diferenças de desempenho e identificar tendências sazonais.</p>
    </div>
    <div id="chart"></div>

    <!-- Script para gerar o gráfico -->
    <script>
        fetch('/grafico-dados')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erro na resposta da rede: ' + response.statusText);
                }
                return response.json();
            })
            .then(data => {
                if (!data || data.error) {
                    document.getElementById('chart').innerHTML = `<p>${data.error || 'Sem dados disponíveis para exibição.'}</p>`;
                    return;
                }

                const seriesData = {};
                const categories = [];

                data.forEach(item => {
                    if (!categories.includes(item.mes)) {
                        categories.push(item.mes);
                    }
                    if (!seriesData[item.loja]) {
                        seriesData[item.loja] = Array(categories.length).fill(0);
                    }
                    const index = categories.indexOf(item.mes);
                    seriesData[item.loja][index] = item.valor;
                });

                const series = Object.keys(seriesData).map(loja => {
                    return {
                        name: loja,
                        data: seriesData[loja]
                    };
                });

                var options = {
                    series: series,
                    chart: {
                        type: 'bar',
                        height: 350,
                        background: '#222'
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
                        categories: categories,
                        labels: {
                            style: {
                                colors: '#fff',
                                fontSize: '14px'
                            }
                        }
                    },
                    yaxis: {
                        title: {
                            text: 'Valores',
                            style: {
                                color: '#fff'
                            }
                        },
                        labels: {
                            style: {
                                colors: '#fff',
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
                                color: '#fff'
                            }
                        }
                    },
                    grid: {
                        borderColor: '#444'
                    },
                    legend: {
                        labels: {
                            colors: '#fff'
                        }
                    },
                    title: {
                        text: 'Desempenho de Vendas',
                        style: {
                            color: '#fff',
                            fontSize: '16px'
                        }
                    },
                    subtitle: {
                        text: 'Comparação de nossa loja com concorrentes',
                        style: {
                            color: '#fff',
                            fontSize: '14px'
                        }
                    }
                };

                var chart = new ApexCharts(document.querySelector("#chart"), options);
                chart.render();
            })
            .catch(error => {
                document.getElementById('chart').innerHTML = '<p>Erro ao carregar os dados do gráfico.</p>';
                console.error('Erro:', error);
            });
    </script>
</body>
</html>
