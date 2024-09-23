<?php
include 'conexion.php';

$sql = "SELECT * FROM juegos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nombre: " . $row["nombre"]. " - Género: " . $row["genero"]. " - Plataforma: " . $row["plataforma"]. " - Fecha de Lanzamiento: " . $row["fecha_lanzamiento"]. "<br>";
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>

