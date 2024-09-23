<?php
$servername = "localhost";
$username = "root"; // Cambia si tu usuario de MySQL es diferente
$password = ""; // Cambia si tu contraseña es diferente
$dbname = "proyecto160924"; // Reemplaza con el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>