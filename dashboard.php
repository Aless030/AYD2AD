<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Nuevo Estudiante - Instituto Educativo Wex</title>
    <!-- Incluye Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link rel="" href="styles.css">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        .dashboard {
            display: flex;
        }

        .sidebar {
            width: 250px;
            background-color: #333;
            padding: 20px;
            color: white;
        }

        .sidebar h2 {
            color: orange;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar li {
            margin-bottom: 10px;
        }

        .sidebar a {
            text-decoration: none;
            color: white;
        }

        .sidebar a:hover {
            color: orange;
        }

        .content {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            /* Centrar elementos verticalmente */
            justify-content: space-around;
            /* Espaciado uniforme */
        }

        .column {
            width: 48%;
            margin-bottom: 20px;

        }

        .chart-container {
            width: 100%;
            max-width: 500px;
            margin: auto;
        }

        /* Estilo adicional para el contenedor del gráfico de pastel */
        #grafico4-container {
            width: 400px;
            height: 500px;
            /* Altura fija */
            margin: auto;
        }
    </style>

</head>

<body>

    <header>

        <nav class="navbar navbar-expand-lg fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll" style="background-color: orange;">
            <div class="container"><a class="navbar-brand" href="index.html"><img src="assets/img/LOGO.png" height="50" alt="logo" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-lg-center align-items-start">
                        <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="administrador.php">Pre-Registered Students</a></li>
                        <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="ContactoEstudiantes.php">Students Contacts</a></li>
                        <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="RegistrarEstudiante.php">Register Students</a></li>
                        <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="">Dashboard</a></li>
                        <li class="nav-item px-3 px-xl-4"><a class="btn btn-outline-dark order-1 order-lg-0 fw-medium" href="index.php">Salir</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <?php

    class DB
    {

        public $pdo = null;

        function __construct()
        {

            $this->pdo = new PDO(
                "mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET,
                DB_USER,
                DB_PASSWORD,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );
        }
    }
    define("DB_HOST", "localhost");
    define("DB_NAME", "wex");
    define("DB_CHARSET", "utf8mb4");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_PORT", 3308);
    $_DB = new DB();

    // Consulta para obtener la cantidad de registros por mes
    $sql = "SELECT DATE_FORMAT(hora_registro, '%m') AS mes, COUNT(*) AS cantidad FROM preestudiantes GROUP BY mes";
    $stmt = $_DB->pdo->prepare($sql);
    $stmt->execute();
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Crear un array para almacenar los datos del gráfico
    $datosGraficoMeses = [
        'labels' => [],
        'datasets' => [
            [
                'label' => 'Pre-registros por Mes',
                'data' => [], // Aquí almacenaremos el número de registros por cada mes
                'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                'borderColor' => 'rgba(75, 192, 192, 1)',
                'borderWidth' => 1
            ]
        ]
    ];

    // Crear un array para almacenar el número de registros por cada mes
    $numRegistrosPorMes = [];

    // Inicializar el array con 12 meses
    for ($i = 1; $i <= 12; $i++) {
        $datosGraficoMeses['labels'][] = strftime('%B', strtotime("2023-$i-01")); // Obtener el nombre del mes
        $numRegistrosPorMes[$i] = 0; // Inicializar a 0
    }

    // Procesar los resultados y contar el número de registros por mes
    foreach ($resultados as $resultado) {
        $numRegistrosPorMes[$resultado['mes']] = $resultado['cantidad'];
    }

    // Llenar el array de datos del gráfico con el número de registros por cada mes
    $datosGraficoMeses['datasets'][0]['data'] = array_values($numRegistrosPorMes);


    // Consulta para obtener la cantidad de estudiantes por género
    $sqlGenero = "SELECT genero, COUNT(*) AS cantidad FROM preestudiantes GROUP BY genero";
    $stmtGenero = $_DB->pdo->prepare($sqlGenero);
    $stmtGenero->execute();
    $resultadosGenero = $stmtGenero->fetchAll(PDO::FETCH_ASSOC);

    // Crear un array para almacenar los datos del gráfico de pastel
    $datosGraficoGenero = [
        'labels' => [],
        'datasets' => [
            [
                'data' => [], // Aquí almacenaremos la cantidad de estudiantes por género
                'backgroundColor' => ['rgba(255, 99, 132, 0.2)', 'rgba(75, 192, 192, 0.2)'], // Colores para los géneros (puedes personalizar estos colores)
                'borderColor' => ['rgba(255, 99, 132, 1)', 'rgba(75, 192, 192, 1)'],
                'borderWidth' => 1
            ]
        ]
    ];

    // Procesar los resultados y almacenar la cantidad de estudiantes por género
    foreach ($resultadosGenero as $resultadoGenero) {
        $datosGraficoGenero['labels'][] = $resultadoGenero['genero'];
        $datosGraficoGenero['datasets'][0]['data'][] = $resultadoGenero['cantidad'];
    }



    $sqlProgramas = "SELECT programa_academico, COUNT(*) AS cantidad FROM preestudiantes GROUP BY programa_academico";
    $stmtProgramas = $_DB->pdo->prepare($sqlProgramas);
    $stmtProgramas->execute();
    $resultadosProgramas = $stmtProgramas->fetchAll(PDO::FETCH_ASSOC);

    $programasLabels = [];
    $programasData = [];

    foreach ($resultadosProgramas as $resultadoPrograma) {
        $programasLabels[] = $resultadoPrograma['programa_academico'];
        $programasData[] = $resultadoPrograma['cantidad'];
    }

    $datosGraficoProgramas = [
        'labels' => $programasLabels,
        'datasets' => [
            [
                'label' => 'Estudiantes por Programa Académico',
                'data' => $programasData,
                'borderColor' => 'rgba(255, 99, 132, 1)',
                'borderWidth' => 2,
                'fill' => false
            ]
        ]
    ];


    /*
    // Crear un array para almacenar los datos del gráfico de radar
    $datosGrafico3 = [
        'labels' => ['Uno', 'Dos', 'Tres'],
        'datasets' => [
            [
                'label' => 'Datos 3',
                'data' => [15, 25, 20],
                'backgroundColor' => 'rgba(255, 205, 86, 0.2)',
                'borderColor' => 'rgba(255, 205, 86, 1)',
                'borderWidth' => 1
            ]
        ]
    ];*/

    ?>


    <section>
        <br>
        <div class="content">

            <!-- Primera columna con dos gráficos -->
            <div class="column">
                <div class="chart-container">
                    <h2>Cantidad de Pre-Registros En El Año</h2>
                    <canvas id="grafico1" width="400" height="200"></canvas>
                </div>


            </div>

            <!-- Segunda columna con dos gráficos -->
            <div class="column">
                <div class="chart-container">
                    <h2>Cantidad de pre-registro de Estudiantes por Carrera</h2>
                    <canvas id="grafico2" width="400" height="200"></canvas>
                </div>


            </div>
            <div class="chart-container" id="grafico4-container">
                <h2 style="text-align: center;">Cantidad de pre-registros por Genero</h2>
                <canvas id="grafico4" width="400" height="200"></canvas>
            </div>
        </div>

    </section>
    <script>
        var ctx1 = document.getElementById('grafico1').getContext('2d');
        var grafico1 = new Chart(ctx1, {
            type: 'bar',
            data: <?php echo json_encode($datosGraficoMeses); ?>,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var ctx2 = document.getElementById('grafico2').getContext('2d');
        var grafico2 = new Chart(ctx2, {
            type: 'line',
            data: <?php echo json_encode($datosGraficoProgramas); ?>,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });




        var ctxGenero = document.getElementById('grafico4').getContext('2d');
        var grafico4 = new Chart(ctxGenero, {
            type: 'pie',
            data: <?php echo json_encode($datosGraficoGenero); ?>,
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>


<!-- <div class="chart-container">
        <h2>Gráfico de Radar</h2>
        <canvas id="grafico3" width="400" height="200"></canvas>
    </div> -->
<!-- 

var datosGrafico2 = {
                    labels: ['X', 'Y', 'Z'],
                    datasets: [{
                        label: 'Datos 2',
                        data: [5, 10, 8],
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 2,
                        fill: false
                    }]
                };

                var datosGrafico3 = {
                    labels: ['Uno', 'Dos', 'Tres'],
                    datasets: [{
                        label: 'Datos 3',
                        data: [15, 25, 20],
                        backgroundColor: 'rgba(255, 205, 86, 0.2)',
                        borderColor: 'rgba(255, 205, 86, 1)',
                        borderWidth: 1
                    }]
                };

                var datosGrafico4 = {
                    labels: ['Rojo', 'Verde', 'Azul'],
                    datasets: [{
                        data: [8, 12, 10],
                        backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(75, 192, 192, 0.2)', 'rgba(54, 162, 235, 0.2)'],
                        borderColor: ['rgba(255, 99, 132, 1)', 'rgba(75, 192, 192, 1)', 'rgba(54, 162, 235, 1)'],
                        borderWidth: 1
                    }]
                };
-->