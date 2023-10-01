<?php

include('conexion.php');

// Verifica si se ha enviado una solicitud POST desde pregunta5.php
if (isset($_POST['id']) && isset($_POST['nuevoRol'])) {
    // Obtiene los datos de la solicitud POST
    $id = $_POST['id'];
    $nuevoRol = $_POST['nuevoRol'];

    // Realiza una consulta SQL para actualizar el rol del usuario
    $query = "UPDATE usuario SET rol = '$nuevoRol' WHERE id = '$id'";

    // Ejecuta la consulta utilizando la variable $con
    if ($con->query($query) === TRUE) {
        
        header("Location: pregunta5.php");
        exit;
    } else {
        echo "Error al actualizar el rol: " . $con->error;
    }
}

// Cierra la conexión a la base de datos aquí si es necesario
