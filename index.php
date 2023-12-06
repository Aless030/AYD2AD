<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Nuevo Estudiante - Instituto Educativo Wex</title>
    <!-- Incluye Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Incluye CSS personalizado -->
    <link rel="stylesheet" href="styles.css ">





    <!--    ESTILOS-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />

    <link href="login.php" rel="" />
    <script>
        function mostrarModal() {
            var modal = document.getElementById('modal');
            modal.style.display = 'block';
        }

        function cerrarModal() {
            var modal = document.getElementById('modal');
            modal.style.display = 'none';
        }
    </script>
    <style>
        .modal-contenido {
            background-color: white;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 20%;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);

        }

        .cerrar {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .cerrar:hover,
        .cerrar:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        /* Estilos generales para el carrusel y los formularios */
        .carousel-container {
            width: 500px;
            overflow: hidden;
            margin: 0 auto;
        }

        .carousel {
            display: flex;
            transition: transform 0.5s;
        }

        .slide {
            flex: 0 0 100%;
            width: 500px;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            display: none;
        }

        .titulo-pagina {
            font-size: 80px;
            font-weight: bold;

            /* Cambia el color según tu preferencia */
            text-align: left;
            /* Otros estilos adicionales según tus necesidades */
        }

        body {
            background-color: #000000;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll" style="background-color: orange;">
        <div class="container"><a class="navbar-brand" href="index.php"><img src="assets/img/LOGO.png" height="50" alt="logo" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
            <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-lg-center align-items-start">
                    <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#home">Home</a></li>
                    <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#booking">Information</a></li>
                    <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#service">Register</a></li>

                    <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#testimonial"></a></li>
                    <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#!"></a></li>
                    <li class="nav-item px-3 px-xl-4"><a class="btn btn-outline-dark order-1 order-lg-0 fw-medium" href="#!" onclick="mostrarModal()"><i class="bi bi-person-circle">Admin</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <section style="padding-top: 100px;" id="home">
        <div class="bg-holder" style="background-image:url(assets/img/hero/hero-bg.svg);">
        </div>
        <!--/.bg-holder-->

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 hero-img" src="assets/img/fondo.jpg" alt="hero-header" style="width: 50%;" /></div>
                <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
                    <h4 class="fw-bold  mb-3" style="color: #F8F8FF;">Bienvenido a</h4>
                    <h1 class="titulo-pagina" style="color: white;">Instituto Educativo Wex</h1> <br>
                    <h5 style="color: white;" class="mb-4 fw-medium d-none d-xl-block">
                        <p>En el Instituto Educativo Wex, nuestro compromiso es brindar una educación de calidad que
                            forme a líderes del mañana. <br /><br class="d-none d-xl-block" />"Educacion Inteligente"</p>
                    </h5>

                    <div class="text-center text-md-start"> <a class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow" href="#booking" role="button">Conocer mas...</a>

                    </div>
                </div>
            </div>
        </div>
    </section>










    <div id="modal" class="modal">
        <div class="modal-contenido ">
            <span class="cerrar" onclick="cerrarModal()">&times;</span>
            <h2 style="color: black;">Administrador</h2>
            <div id="error-message"></div> <!-- Agrega un contenedor para mostrar el mensaje de error -->
            <form method="POST" action="login.php" onsubmit="return validarAdmin()">
                <label for="usuario" style="color: black">Usuario:</label>
                <input type="text" class="form-control" name="usuario" required><br><br>
                <label for="contraseña" style="color: black;">Contraseña:</label>
                <input type="password" class="form-control" name="contraseña" required><br><br>
                <input type="submit" name="submit" class="btn btn-primary" value="Iniciar sesión">
            </form>
        </div>
    </div>

    <div class="small py-vh-1 w-500 overflow-hidden" style="color: white;padding-top: 50px;" id="booking">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 border-end" data-aos="fade-up">
                    <div class="d-flex">
                        <div class="col-md-3 flex-fill pt-3 pe-3 pe-md-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-box-seam" viewbox="0 0 16 16">
                                <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                            </svg>
                        </div>
                        <div class="col-md-9 flex-fill">
                            <h3 class="h5 my-2">Visión Educativa</h3>
                            <p>
                                En el Instituto Educativo Wex, nuestra visión va más allá de la enseñanza tradicional. Nos esforzamos por ser líderes en la formación de individuos competentes y éticos que estén preparados para enfrentar los desafíos del mundo globalizado actual. Con un enfoque centrado en el estudiante, buscamos fomentar la curiosidad intelectual, la creatividad y el compromiso social.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 border-end" data-aos="fade-up" data-aos-delay="200">
                    <div class="d-flex">
                        <div class="col-md-3 flex-fill pt-3 pt-3 pe-3 pe-md-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-card-checklist" viewbox="0 0 16 16">
                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                            </svg>
                        </div>
                        <div class="col-md-9 flex-fill">
                            <h3 class="h5 my-2">Enfoque en la Tecnología</h3>
                            <p>
                                Nos mantenemos a la vanguardia de la educación al integrar la tecnología de manera efectiva en nuestros programas académicos. Esto incluye el uso de plataformas educativas, recursos en línea y herramientas digitales que mejoran la experiencia de aprendizaje y preparan a nuestros estudiantes para un mundo cada vez más digital.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="d-flex">
                        <div class="col-md-3 flex-fill pt-3 pt-3 pe-3 pe-md-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-window-sidebar" viewbox="0 0 16 16">
                                <path d="M2.5 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm1 .5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                                <path d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v2H1V3a1 1 0 0 1 1-1h12zM1 13V6h4v8H2a1 1 0 0 1-1-1zm5 1V6h9v7a1 1 0 0 1-1 1H6z" />
                            </svg>
                        </div>
                        <div class="col-md-9 flex-fill">
                            <h3 class="h5 my-2">Red de Apoyo Educativo</h3>
                            <p>
                                Reconociendo que el éxito educativo va más allá del aula, contamos con un equipo de profesionales dedicados a brindar apoyo académico, orientación vocacional y asesoramiento personalizado. Nuestra red de apoyo se extiende para involucrar a padres, profesores y mentores, creando así un sistema integral para el desarrollo de cada estudiante.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="small py-vh-1 w-500 overflow-hidden" style="color: white;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 border-end" data-aos="fade-up">
                    <div class="d-flex">
                        <img src="assets/img/a11.jpg" alt="Imagen" class="img-fluid rounded-circle">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 border-end" data-aos="fade-up" data-aos-delay="200">
                    <div class="d-flex">
                        <img src="assets/img/a1.jpg" alt="Imagen" class="img-fluid rounded-circle">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="d-flex">
                        <img src="assets/img/a2.webp" alt="Imagen" class="img-fluid rounded-circle">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="carousel-container pt-5 pt-md-5" id="service">
        <h2 class="text-center" style="color: #e0e0e0;">Pre-Registro de Nuevo Estudiante</h2>
        <p class="text-center" style="color: #e0e0e0;">Por favor, complete el formulario de pre-registro a continuación:</p>
        <div class="carousel">
            <form id="fullForm" action="procesar_registro.php" method="post" onsubmit="return validarFormularioActual()">
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
                        <label for="programa_academico">Carrera de Interés:</label>
                        <select class="form-control" id="programa_academico" name="programa_academico" required>
                            <option value="" disabled selected>Seleccioneuna carrera</option>
                            <option value="Arquitectura">Arquitectura</option>
                            <option value="Comunicación">Comunicación</option>
                            <option value="Empresarial">Empresarial</option>
                            <option value="Sistemas">Sistemas</option>
                            <option value="Salud">Salud</option>
                            <option value="Industrial">Industrial</option>
                            <!--Puedes agregar más opciones según las carreras disponibles en tu institución-->
                        </select>
                    </div>
                    <!-- <div class="form-group">
    <label for="programa_academico">Programa Académico de Interés:</label>
    <select class="form-control" id="programa_academico" name="programa_academico" required>
        <option value="" disabled selected>Seleccione un programa académico</option>
        <option value="Arquitectura">Arquitectura</option>
        <option value="Comunicación">Comunicación</option>
        <option value="Empresarial">Empresarial</option>
        <option value="Sistemas">Sistemas</option>
        <option value="Salud">Salud</option>
        <option value="Industrial">Industrial</option>
        Puedes agregar más opciones según las carreras disponibles en tu institución 
    </select>
</div>

 -->
                </div>
                <!-- ... (resto de formularios) ... -->
                <div class="slide card p-4 custom-width" id="slide3" style="display: none; border: 4px solid orange; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);background-color: black;color: #e0e0e0;">
                    <!-- Contenido del segundo formulario -->
                    <div class="form-group">
                        <label for="documentos_identificacion">Documentos de Identificación:</label>
                        <input type="file" class="form-control-file" id="documentos_identificacion" name="documentos_identificacion" accept=".pdf, .jpg, .png" required>
                        <small>(Subir copia de cédula, pasaporte, etc.)</small>
                    </div>
                    <!-- Nuevos Campos de Documentación XD-->
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
                    <!-- Resto de campos del segundo formulario 3 XD -->
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

        //mis eventos para el botón "Siguiente" y "Anterior"
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

        function validarAdmin() {

            var usuario = document.getElementsByName('usuario')[0].value;
            var contraseña = document.getElementsByName('contraseña')[0].value;

            if (usuario !== "admin" || contraseña !== "admin123") {
                var errorMessage = document.getElementById('error-message');
                errorMessage.innerText = "Credenciales inválidas. Por favor, inténtalo nuevamente.";
                return false; // Evita que el formulario se envíe
            }

        }
    </script>

    <!-- Incluye Bootstrap JS (opcional, solo si necesitas funcionalidades específicas de Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>

</html>