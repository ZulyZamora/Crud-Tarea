<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar que se haya enviado el campo 'id'
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        // Preparar la consulta para evitar SQL Injection
        $stmt = $conn->prepare("DELETE FROM juegos WHERE id=?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            echo "Registro eliminado con éxito";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Faltan datos para eliminar";
    }

    $conn->close();
}
?>

<form method="post" action="">
    ID del Juego: <input type="text" name="id" required><br>
    <input type="submit" value="Eliminar Juego">
</form>
