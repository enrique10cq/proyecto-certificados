<?php

$host = "localhost";
$user = "root";
$pass = "enriqueadmin";
$db = "db_certificados";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

?>
