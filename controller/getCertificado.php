<?php

require("../config/conexion.php");

$id = $conn->real_escape_string($_POST['id']);

$sql = "SELECT alumno.*, certificado.codigo, certificado.curso, certificado.descripcion 
        FROM alumno 
        JOIN certificado ON alumno.id_certificado = certificado.id_certificado 
        WHERE alumno.id_alumno = $id LIMIT 1";

$resultado = $conn->query($sql);
$certificado = [];

if ($resultado->num_rows > 0) {
    $certificado = $resultado->fetch_assoc();
} else {
    echo json_encode(["error" => "No se encontró el registro."]);
    exit;
}

echo json_encode($certificado, JSON_UNESCAPED_UNICODE);


?>

