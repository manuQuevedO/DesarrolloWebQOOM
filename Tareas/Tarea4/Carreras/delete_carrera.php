<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Eliminar la carrera de la base de datos
    $sql = "DELETE FROM carrera WHERE id = $id";

    if ($con->query($sql) === TRUE) {
        echo "Carrera eliminada con éxito.";

        // Esperar 4 segundos antes de redirigir
        sleep(4);

        // Redirigir al usuario a read_carrera.php
        header("Location: read_carrera.php");
        exit();
    } else {
        echo "Error al eliminar la carrera: " . $con->error;
    }

    $con->close();
} else {
    echo "ID de carrera no proporcionado o método de solicitud incorrecto.";
}
