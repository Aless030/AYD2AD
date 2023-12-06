<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="carousel-container pt-5 pt-md-5" id="service">
        <h2 class="text-center" style="color: #e0e0e0;">Registro de Nuevo Estudiante</h2>
        <p class="text-center" style="color: #e0e0e0;">Por favor, complete el formulario de inscripción a continuación:</p>
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
        <?php if (isset($_SESSION['success_message'])) : ?>
            alert("<?php echo $_SESSION['success_message']; ?>");
        <?php
            unset($_SESSION['success_message']); // Elimina el mensaje después de mostrarlo
        endif;
        ?>
    </script>

    <!-- Incluye Bootstrap JS (opcional, solo si necesitas funcionalidades específicas de Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>