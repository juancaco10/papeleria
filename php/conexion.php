<?php
// Configuración de conexión a la base de datos
$host = 'localhost';
$usuario = 'root';
$contraseña = 'Juancaco10';
$base_de_datos = 'paginaweb';

$conexion = new mysqli($host, $usuario, $contraseña, $base_de_datos);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
