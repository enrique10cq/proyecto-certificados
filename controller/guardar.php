<?php

require("../config/conexion.php");

// Recibir datos del formulario
$nombres = $conn->real_escape_string($_POST['nombres']);
$apellidos = $conn->real_escape_string($_POST['apellidos']);
$tipoDocumento = $conn->real_escape_string($_POST['tipoDocumento']);
$documento = $conn->real_escape_string($_POST['documento']);
$correo = $conn->real_escape_string($_POST['correo']);

$codigo = $conn->real_escape_string($_POST['codigo']);
$curso = $conn->real_escape_string($_POST['curso']);
$descripcion = $conn->real_escape_string($_POST['descripcion']);
$fecha = date('Y-m-d');

// Procesar archivo subido
$target_dir = "../assets/files/"; // Carpeta donde se guardarán los archivos
$archivo = $_FILES['archivo'];
$archivo_nombre = basename($archivo["name"]);
$archivo_ruta = $target_dir . $archivo_nombre;
$archivo_tipo = strtolower(pathinfo($archivo_ruta, PATHINFO_EXTENSION));

// Verificar si el archivo es un PDF
if($archivo_tipo != "pdf") {
    echo "Error: Solo se permiten archivos PDF.";
    exit;
}

// Mover el archivo a la carpeta especificada
if (move_uploaded_file($archivo["tmp_name"], $archivo_ruta)) {
    // Insertar datos en la tabla certificado
    $sql_certificado = "INSERT INTO certificado (codigo, curso, descripcion, nombre_archivo, fecha) VALUES 
    ('$codigo', '$curso', '$descripcion', '$archivo_nombre', '$fecha')";

    if ($conn->query($sql_certificado) === TRUE) {
        $id_certificado = $conn->insert_id; // Obtener el ID del certificado insertado

        // Insertar datos en la tabla alumno      
        $sql_alumno = "INSERT INTO alumno (nombres, apellidos, tipo_documento, documento, correo, id_certificado) VALUES
        ('$nombres', '$apellidos', '$tipoDocumento', '$documento', '$correo', '$id_certificado')";

        if ($conn->query($sql_alumno) === TRUE) {
            header('Location: ../views/admin.php');
            exit;
        } else {
            echo "Error al insertar en la tabla certificado: " . $conn->error;
        }
    } else {
        echo "Error al insertar en la tabla alumno: " . $conn->error;
    }
} else {
    echo "Error al subir el archivo.";
}

$conn->close();

?>

