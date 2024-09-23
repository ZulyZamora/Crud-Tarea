<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar que se hayan enviado todos los campos necesarios
    if (isset($_POST['nombre']) && isset($_POST['genero']) && isset($_POST['plataforma']) && isset($_POST['fecha_lanzamiento'])) {
        $nombre = $_POST['nombre'];
        $genero = $_POST['genero'];
        $plataforma = $_POST['plataforma'];
        $fecha_lanzamiento = $_POST['fecha_lanzamiento'];

        // Preparar la consulta para evitar SQL Injection
        $stmt = $conn->prepare("INSERT INTO juegos (nombre, genero, plataforma, fecha_lanzamiento) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nombre, $genero, $plataforma, $fecha_lanzamiento);

        if ($stmt->execute()) {
            echo "Nuevo juego creado con éxito";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Faltan datos para crear el juego";
    }

    $conn->close();
}
?>

<form method="post" action="">
    Nombre: <input type="text" name="nombre" required><br>
    Género: <input type="text" name="genero" required><br>
    Plataforma: <input type="text" name="plataforma" required><br>
    Fecha de Lanzamiento: <input type="date" name="fecha_lanzamiento"><br>
    <input type="submit" value="Agregar Juego">
</form>
