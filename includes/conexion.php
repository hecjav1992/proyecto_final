<?php
$host = "https://proyecto-final-86ts.onrender.com";
$user = "root";
$pass = "1234";
$db   = "sistema_web";

$conexion = new mysqli($host, $user, $pass, $db);
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
