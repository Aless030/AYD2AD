<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Nuevo Estudiante - Instituto Educativo Wex</title>
    <!-- Incluye Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Incluye CSS personalizado -->
    <link rel="stylesheet" href="styles.css">
    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


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
                        <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="administrador.php">Pre-Registered Students</a></li>
                        <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="">Students
                                Contacts</a></li>
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
            <br>
            <form method="GET" action="ContactoEstudiantes.php">
                <div class="mb-3">
                    <label for="search" class="form-label">Buscar:</label>
                    <input type="text" class="form-control" id="search" name="search" placeholder="Ingrese el nombre">
                </div>
                <button type="submit" class="btn btn-primary">Buscar</button>
                <a href="ContactoEstudiantes.php" class="btn btn-dark">Restablecer</a>
            </form>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre Completo</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Direccion</th>
                        <!-- Agrega más encabezados según la información que deseas mostrar -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Obtén el valor del campo de búsqueda desde la URL
                    $searchTerm = isset($_GET['search']) ? strtolower($_GET['search']) : '';

                    // Modifica la consulta para incluir el filtro de búsqueda (convierte ambas a minúsculas)
                    $query = $_DB->pdo->prepare("SELECT * FROM estudiantes WHERE LOWER(nombre_completo) LIKE :searchTerm");
                    $query->bindValue(':searchTerm', $searchTerm . '%', PDO::PARAM_STR); // Quité el '%' antes de $searchTerm
                    $query->execute();
                    $results = $query->fetchAll();



                    foreach ($results as $student) {
                        echo "<tr>";
                        echo "<td>" . $student['nombre_completo'] . "</td>";
                        echo "<td>" . $student['telefono'] . "</td>";
                        echo "<td>" . $student['correo_electronico'] . "</td>";
                        echo "<td>" . $student['direccion'] . "</td>";
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