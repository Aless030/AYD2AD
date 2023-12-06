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

</head>

<body>

    <header>

        <nav class="navbar navbar-expand-lg fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll" style="background-color: orange;">
            <div class="container"><a class="navbar-brand" href="index.html"><img src="assets/img/LOGO.png" height="50" alt="logo" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-lg-center align-items-start">
                        <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="">Pre-Registered Students</a></li>
                        <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="ContactoEstudiantes.php">Students Contacts</a></li>
                        <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="RegistrarEstudiante.php">Register Students</a></li>
                        
                        <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="dashboard.php">Dashboard</a></li>
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

    ?>
    <section>
        <div class="container">
            
            <table class="table">
                <br>
                <thead>
                    <tr>
                        <th>Nombre Completo</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Numero de identificacion</th>
                        <th>telefono</th>
                        <th>Correo</th>
                        <th>Fecha de Registro</th>
                        
                        <!-- Agrega más encabezados según la información que deseas mostrar -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = $_DB->pdo->query("SELECT * FROM preestudiantes");
                    $results = $query->fetchAll();

                    foreach ($results as $student) {
                        echo "<tr>";
                        echo "<td>" . $student['nombre_completo'] . "</td>";
                        echo "<td>" . $student['fecha_nacimiento'] . "</td>";
                        echo "<td>" . $student['numero_identificacion'] . "</td>";
                        echo "<td>" . $student['telefono'] . "</td>";
                        echo "<td>" . $student['correo_electronico'] . "</td>";
                        echo "<td>" . $student['hora_registro'] . "</td>";
                        // Agrega más columnas según los campos de tu tabla estudiantes
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>







    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>