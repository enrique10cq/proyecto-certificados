<?php

require("../config/conexion.php");

$id = $conn->real_escape_string($_POST['id']);

$sql = "SELECT alumno.*, certificado.codigo, certificado.curso, certificado.descripcion 
        FROM alumno 
        JOIN certificado ON alumno.id_alumno = certificado.id_alumno 
        WHERE alumno.id_alumno = $id LIMIT 1";

$resultado = $conn->query($sql);
$rows = $resultado->num_rows;
$certificado = [];

if ($rows > 0) {
    $certificado = $resultado->fetch_array();
} else {
    echo json_encode(["error" => "No se encontró el registro."]);
}
echo json_encode($certificado, JSON_UNESCAPED_UNICODE);

$conn->close();
?>
