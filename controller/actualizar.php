<?php

require("../config/conexion.php");

// Recibir datos del formulario
$id_alumno = $conn->real_escape_string($_POST['id']);
$nombres = $conn->real_escape_string($_POST['nombres']);
$apellidos = $conn->real_escape_string($_POST['apellidos']);
$tipoDocumento = $conn->real_escape_string($_POST['tipoDocumento']);
$documento = $conn->real_escape_string($_POST['documento']);
$correo = $conn->real_escape_string($_POST['correo']);
$codigo = $conn->real_escape_string($_POST['codigo']);
$curso = $conn->real_escape_string($_POST['curso']);
$descripcion = $conn->real_escape_string($_POST['descripcion']);

// Procesar archivo subido
$target_dir = "../assets/files/";
$archivo = $_FILES['archivo'];
$archivo_nombre = basename($archivo["name"]);
$archivo_ruta = $target_dir . $archivo_nombre;
$archivo_tipo = strtolower(pathinfo($archivo_ruta, PATHINFO_EXTENSION));

// Si se sube un archivo, verificar que sea PDF y moverlo
if (!empty($archivo["tmp_name"])) {
    if ($archivo_tipo != "pdf") {
        echo "Error: Solo se permiten archivos PDF.";
        exit;
    }
    if (!move_uploaded_file($archivo["tmp_name"], $archivo_ruta)) {
        echo "Error al subir el archivo.";
        exit;
    }
}

// Actualizar datos en la tabla alumno
$sql_alumno = "UPDATE alumno SET 
    nombres='$nombres', 
    apellidos='$apellidos', 
    tipo_documento='$tipoDocumento', 
    documento='$documento', 
    correo='$correo' 
    WHERE id_alumno='$id_alumno'";

if ($conn->query($sql_alumno) === TRUE) {
    // Actualizar datos en la tabla certificado
    $sql_certificado = "UPDATE certificado SET 
        codigo='$codigo', 
        curso='$curso', 
        descripcion='$descripcion'";

    if (!empty($archivo["tmp_name"])) {
        $sql_certificado .= ", nombre_archivo='$archivo_nombre'";
    }

    $sql_certificado .= " WHERE id_alumno='$id_alumno'";

    if ($conn->query($sql_certificado) === TRUE) {
        header('Location: ../views/admin.php');
        exit;
    } else {
        echo "Error al actualizar en la tabla certificado: " . $conn->error;
    }
} else {
    echo "Error al actualizar en la tabla alumno: " . $conn->error;
}

$conn->close();
?>
