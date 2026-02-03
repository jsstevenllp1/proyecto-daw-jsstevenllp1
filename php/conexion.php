<?php
/**
 * Archivo de conexión a la base de datos
 * Proyecto DAW - Despliegue de Aplicaciones Web
 */

$host = "localhost";
$usuario = "root";
$password = "";
$base_datos = "proyecto_daw";

// Simulación de conexión
$conn = new mysqli($host, $usuario, $password, $base_datos);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// echo "Conexión exitosa";
?>
