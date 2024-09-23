<!DOCTYPE html>
<html>
<head>
    <title>CRUD Juegos</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>CRUD Juegos</h1>
        <h2>Agregar Juego</h2>
        <?php include 'create.php'; ?>

        <h2>Actualizar Juego</h2>
        <?php include 'update.php'; ?>

        <h2>Eliminar Juego</h2>
        <?php include 'delete.php'; ?>

        <h2>Lista de Juegos</h2>
        <div class="game-list">
            <?php include 'read.php'; ?>
        </div>
    </div>
</body>
</html>
