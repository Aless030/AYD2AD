<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $fechaNacimiento = $_POST['fecha_nacimiento'];
    $genero = $_POST['genero'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $correo = $_POST['correo'];
    $nacionalidad = $_POST['nacionalidad'];
    $estadoCivil = $_POST['estado_civil'];
    $numeroIdentificacion = $_POST['numero_identificacion'];

    // Ajusta estos campos según tu formulario

    $institucionAnterior = $_POST['institucion_anterior'];
    $anoEgreso = $_POST['añoegreso'];
    $programaAcademico = $_POST['programa_academico'];

    // Los archivos subidos (documentos, certificados, etc.)


    $fotoPerfil = $_FILES['foto_perfil']['name'] ?? '';
    $documentosIdentificacion = $_FILES['documentos_identificacion']['name'] ?? '';
    $certificadoNacimiento = $_FILES['certificado_nacimiento']['name'] ?? '';
    $certificadosBachiller = $_FILES['certificados_bachiller']['name'] ?? '';
    $cartaRecomendacion = $_FILES['carta_recomendacion']['name'] ?? '';
    date_default_timezone_set('America/La_Paz'); // Establece el huso horario a La Paz, Bolivia
    $horaRegistro = date('Y-m-d H:i:s');

    // Realiza la conexión a la base de datos con el puerto especificado
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wex";
    $port = "3308"; // Por ejemplo, 3306 es el puerto predeterminado para MySQL

    try {
        $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO estudiantes (nombre_completo, fecha_nacimiento, genero, telefono, direccion, correo_electronico, nacionalidad, estado_civil, numero_identificacion, foto_perfil, institucion_anterior, año_egreso, programa_academico, documentos_identificacion, certificado_nacimiento, certificados_bachiller, carta_recomendacion,hora_registro) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$nombre, $fechaNacimiento, $genero, $telefono, $direccion, $correo, $nacionalidad, $estadoCivil, $numeroIdentificacion, $fotoPerfil, $institucionAnterior, $anoEgreso, $programaAcademico, $documentosIdentificacion, $certificadoNacimiento, $certificadosBachiller, $cartaRecomendacion, $horaRegistro]);



        

        // Redirige a la página de menú, incluyendo la URL anterior como parámetro
        header("Location: http://localhost/AYD2AD/RegistrarEstudiante.php");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
