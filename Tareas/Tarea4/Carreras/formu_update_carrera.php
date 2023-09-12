<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Carrera</title>
    <link rel="stylesheet" type="text/css" href="styles_C.css">
</head>

<body>
    <div class="body">
        <?php
        include("conexion.php");

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Consulta SQL para obtener los detalles de la carrera
            $sql = "SELECT * FROM carrera WHERE id = $id";
            $resultado = $con->query($sql);

            if ($resultado->num_rows > 0) {
                $row = $resultado->fetch_assoc();
                $nombre = $row['nombre'];
            } else {
                echo "No se encontró la carrera.";
                exit;
            }
        } else {
            echo "ID de carrera no proporcionado.";
            exit;
        }
        ?>

        <h1>Actualizar Carrera</h1>

        <form action="update_carrera.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="nombre">Nombre de la Carrera:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>" required>
            <br>
            <input type="submit" value="Actualizar">
        </form>

        <a href="read_carrera.php">Volver a la lista de carreras</a>
    </div>
</body>

</html>