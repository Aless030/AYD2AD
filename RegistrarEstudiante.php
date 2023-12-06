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
                        <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="ContactoEstudiantes.php">Students Contacts</a></li>
                        <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="">Register Students</a></li>

                        <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="dashboard.php">Dashboard</a></li>
                        <li class="nav-item px-3 px-xl-4"><a class="btn btn-outline-dark order-1 order-lg-0 fw-medium" href="index.php">Salir</a></li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container" style="padding-top: 80px;">
        <div class="row" style="text-align: center; padding-top:20px;">
            <h3>Estudiantes</h3>
        </div>
        <button type="button" id="openModal" class="btn btn-primary" data-toggle="modal" data-target="#modalForm" style="background-color: orange;">Nuevo</button>

        <div class="row">
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nombre Completo</th>
                            <th scope="col">Fecha de Nacimiento</th>
                            <th scope="col">Genero</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Nacionalidad</th>
                            <th scope="col">Estado Civil</th>
                            <th scope="col">Numero de Identificacion</th>
                            <th scope="col">Institucion Anterior</th>
                            <th scope="col">Año Egreso</th>
                            <th scope="col">Programa Academico</th>
                            <th scope="col">Foto de Perfil</th>
                            <th scope="col">Documento de Identificacion</th>
                            <th scope="col">Certificado de Nacimiento</th>
                            <th scope="col">Certificado de Bachiller</th>
                            <th scope="col">Carta de Recomendacion</th>
                            <th scope="col">Hora de registro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = $_DB->pdo->query("SELECT * FROM estudiantes");
                        $results = $query->fetchAll();

                        foreach ($results as $student) {
                            echo "<tr>";
                            echo "<td>" . $student['nombre_completo'] . "</td>";
                            echo "<td>" . $student['fecha_nacimiento'] . "</td>";
                            echo "<td>" . $student['genero'] . "</td>";
                            echo "<td>" . $student['telefono'] . "</td>";
                            echo "<td>" . $student['direccion'] . "</td>";
                            echo "<td>" . $student['correo_electronico'] . "</td>";
                            echo "<td>" . $student['nacionalidad'] . "</td>";
                            echo "<td>" . $student['estado_civil'] . "</td>";
                            echo "<td>" . $student['numero_identificacion'] . "</td>";
                            echo "<td>" . $student['institucion_anterior'] . "</td>";
                            echo "<td>" . $student['año_egreso'] . "</td>";
                            echo "<td>" . $student['programa_academico'] . "</td>";
                            echo "<td>" . $student['foto_perfil'] . "</td>";
                            echo "<td>" . $student['documentos_identificacion'] . "</td>";
                            echo "<td>" . $student['certificado_nacimiento'] . "</td>";
                            echo "<td>" . $student['certificados_bachiller'] . "</td>";
                            echo "<td>" . $student['carta_recomendacion'] . "</td>";
                            echo "<td>" . $student['hora_registro'] . "</td>";
                            // Agrega más columnas según los campos de tu tabla estudiantes
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="modalFormLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="background-color: black;">
                    <div class="modal-header">
                        <h2 class="text-center" style="color: white;">Registro de Nuevo Estudiante</h2>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Aquí incluye el formulario existente -->
                        <div class="carousel-container pt-5 pt-md-1" id="service">
                            <!-- ... (contenido del formulario) ... -->
                            <div class="carousel-container pt-5 pt-md-1" id="service">

                                <div class="carousel">
                                    <form id="fullForm" action="procesar_admin.php" method="post" onsubmit="return validarFormularioActual()">
                                        <div class="slide card p-4 custom-width" id="slide1" style="display: block; border: 4px solid orange; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);background-color: black;color: #e0e0e0;">

                                            <!-- Contenido del primer formulario -->
                                            <div class="form-group">
                                                <label for="nombre">Nombre Completo:</label>
                                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                                                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="genero">Género:</label>
                                                <select class="form-control" id="genero" name="genero" required>
                                                    <option value="Masculino">Masculino</option>
                                                    <option value="Femenino">Femenino</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="telefono">Número de Teléfono:</label>
                                                <input type="tel" class="form-control" id="telefono" name="telefono" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="telefono">Direccion:</label>
                                                <input type="text" class="form-control" id="direccion" name="direccion" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="telefono">Correo Electronico:</label>
                                                <input type="email" class="form-control" id="correo" name="correo" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="nacionalidad">Nacionalidad:</label>
                                                <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="estado_civil">Estado Civil:</label>
                                                <select class="form-control" id="estado_civil" name="estado_civil" required>
                                                    <option value="Soltero">Soltero</option>
                                                    <option value="Casado">Casado</option>
                                                    <option value="Divorciado">Divorciado</option>
                                                    <option value="Viudo">Viudo</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="numero_identificacion">Número de Identificación:</label>
                                                <input type="text" class="form-control" id="numero_identificacion" name="numero_identificacion" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="foto_perfil">Foto de Perfil:</label>
                                                <input type="file" class="form-control-file" id="foto_perfil" name="foto_perfil" accept=".jpg, .jpeg, .png" required>
                                                <small>(Subir una foto de perfil)</small>
                                            </div>
                                        </div>
                                        <div class="slide card p-4 custom-width" id="slide2" style="display: none; border: 4px solid orange; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);background-color: black;color: #e0e0e0;">
                                            <!-- Contenido del segundo formulario -->
                                            <div class="form-group">
                                                <label for="institucion_anterior">Institución Educativa Anterior:</label>
                                                <input type="text" class="form-control" id="institucion_anterior" name="institucion_anterior" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="nivel_educativo_anterior">Año de Egreso:</label>
                                                <input type="text" class="form-control" id="añoegreso" name="añoegreso" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="programa_academico">Programa Académico de Interes:</label>
                                                <input type="text" class="form-control" id="programa_academico" name="programa_academico" required>
                                            </div>
                                            <!-- Resto de campos del segundo formulario -->
                                        </div>
                                        <!-- ... (resto de formularios) ... -->
                                        <div class="slide card p-4 custom-width" id="slide3" style="display: none; border: 4px solid orange; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);background-color: black;color: #e0e0e0;">
                                            <!-- Contenido del segundo formulario -->
                                            <div class="form-group">
                                                <label for="documentos_identificacion">Documentos de Identificación:</label>
                                                <input type="file" class="form-control-file" id="documentos_identificacion" name="documentos_identificacion" accept=".pdf, .jpg, .png" required>
                                                <small>(Subir copia de cédula, pasaporte, etc.)</small>
                                            </div>
                                            <!-- Nuevos Campos de Documentación -->
                                            <div class="form-group">
                                                <label for="certificado_nacimiento">Certificado de Nacimiento:</label>
                                                <input type="file" class="form-control-file" id="certificado_nacimiento" name="certificado_nacimiento" accept=".pdf, .jpg, .png" required>
                                                <small>(Subir copia del certificado de nacimiento)</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="certificados_bachiller">Certificados de Bachiller:</label>
                                                <input type="file" class="form-control-file" id="certificados_bachiller" name="certificados_bachiller" accept=".pdf, .jpg, .png" required>
                                                <small>(Subir copias de certificados de grados anteriores)</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="carta_recomendacion">Carta de Recomendación:</label>
                                                <input type="file" class="form-control-file" id="carta_recomendacion" name="carta_recomendacion" accept=".pdf, .jpg, .png">
                                                <small>(Subir carta de recomendación, si es necesario)</small>
                                            </div>
                                            <!-- Resto de campos del segundo formulario -->
                                        </div>
                                        <div class="text-center">
                                            <button type="button" id="prev" class="btn btn-primary" style="background-color: orange;width:20%; display: none;">Anterior</button>
                                            <button type="button" id="next" class="btn btn-primary" style="background-color: orange; width:20%">Siguiente</button>
                                            <button type="submit" class="btn btn-primary" style="background-color: orange; display: none;">Enviar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <script>
                                const formCount = 3;
                                let currentForm = 1;

                                // EventListeners para el botón "Siguiente" y "Anterior"
                                document.getElementById('next').addEventListener('click', function() {
                                    if (validarFormularioActual()) {
                                        if (currentForm < formCount) {
                                            document.getElementById('slide' + currentForm).style.display = 'none';
                                            currentForm++;
                                            document.getElementById('slide' + currentForm).style.display = 'block';

                                            document.getElementById('prev').style.display = 'block';
                                            if (currentForm === formCount) {
                                                document.getElementById('next').style.display = 'none';
                                                document.querySelector('form button[type="submit"]').style.display = 'block';
                                            }
                                        }
                                    }
                                });

                                document.getElementById('prev').addEventListener('click', function() {
                                    if (currentForm > 1) {
                                        document.getElementById('slide' + currentForm).style.display = 'none';
                                        currentForm--;
                                        document.getElementById('slide' + currentForm).style.display = 'block';

                                        document.getElementById('next').style.display = 'block';
                                        if (currentForm === 1) {
                                            document.getElementById('prev').style.display = 'none';
                                        }
                                    }
                                });

                                function validarFormularioActual() {
                                    const currentSlide = document.getElementById('slide' + currentForm);
                                    const requiredFields = currentSlide.querySelectorAll('[required]');
                                    let isValid = true;

                                    requiredFields.forEach(field => {
                                        if (field.value.trim() === '') {
                                            isValid = false;
                                            field.classList.add('campo-invalido');
                                        } else {
                                            field.classList.remove('campo-invalido');
                                        }
                                    });

                                    if (!isValid) {
                                        alert('Por favor, complete todos los campos requeridos.');
                                    }

                                    return isValid;
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>











    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>