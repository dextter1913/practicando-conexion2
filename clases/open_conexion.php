<?php 
$host = "localhost";
$usuario = "root";
$contraseña = "";
$baseD = "empleado";

$tabla = "asesores";

$conexion = new mysqli($hots, $usuario, $contraseña, $baseD);
error_reporting(0);

if ($conexion->connect_errno) {
    echo "Nuestro sistema experimenta fallos";
    exit();
}
?>