<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Carrera</title>
    <link rel="stylesheet" type="text/css" href="styles_C.css">
</head>

<body>
    <div class="body">
        <h1>Agregar Carrera</h1>

        <?php
        include("conexion.php");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST['nombre'];

            // Insertar la nueva carrera en la base de datos
            $sql = "INSERT INTO carrera (nombre) VALUES ('$nombre')";

            if ($con->query($sql) === TRUE) {
                echo "Carrera agregada con éxito.";
            } else {
                echo "Error al agregar carrera: " . $con->error;
            }

            $con->close();
        }
        ?>

        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
            <label for="nombre">Nombre de la Carrera:</label>
            <input type="text" id="nombre" name="nombre" required>
            <br>
            <input type="submit" value="Agregar">
        </form>

        <a href="read_carrera.php">Volver a la lista de carreras</a>
    </div>
</body>

</html>