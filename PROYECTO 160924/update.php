<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar que se hayan enviado todos los campos necesarios
    if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['genero']) && isset($_POST['plataforma']) && isset($_POST['fecha_lanzamiento'])) {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $genero = $_POST['genero'];
        $plataforma = $_POST['plataforma'];
        $fecha_lanzamiento = $_POST['fecha_lanzamiento'];

        // Preparar la consulta para evitar SQL Injection
        $stmt = $conn->prepare("UPDATE juegos SET nombre=?, genero=?, plataforma=?, fecha_lanzamiento=? WHERE id=?");
        $stmt->bind_param("ssssi", $nombre, $genero, $plataforma, $fecha_lanzamiento, $id);

        if ($stmt->execute()) {
            echo "Registro actualizado con éxito";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Faltan datos para actualizar";
    }

    $conn->close();
}
?>

<form method="post" action="">
    ID del Juego: <input type="text" name="id" required><br>
    Nombre: <input type="text" name="nombre" required><br>
    Género: <input type="text" name="genero" required><br>
    Plataforma: <input type="text" name="plataforma" required><br>
    Fecha de Lanzamiento: <input type="date" name="fecha_lanzamiento"><br>
    <input type="submit" value="Actualizar Juego">
</form>
