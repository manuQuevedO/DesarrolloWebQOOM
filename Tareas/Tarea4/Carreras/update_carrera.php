<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];

    // Actualizar la carrera en la base de datos
    $sql = "UPDATE carrera SET nombre = '$nombre' WHERE id = $id";

    if ($con->query($sql) === TRUE) {
        echo "Carrera actualizada con éxito.";
    } else {
        echo "Error al actualizar la carrera: " . $con->error;
    }

    $con->close();
}
?>

<meta http-equiv="refresh" content="3; url=read_carrera.php" />