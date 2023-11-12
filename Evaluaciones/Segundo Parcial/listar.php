<?php
include("conexion.php");

$usuarioLogueado = true;
$nivelUsuario = 1;

include("conexion.php");
$sql = "SELECT * FROM libros";
$result = mysqli_query($conexion, $sql);


if ($result->num_rows > 0) {
    echo '<table border="1">';
    echo '<tr><th>ID</th><th>Título</th><th>Imagen</th>';
    if ($nivelUsuario == 1) {
        echo '<th>Operaciones</th>';
    }
    echo '</tr>';

    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["id"] . '</td>';
        echo '<td>' . $row["titulo"] . '</td>';
        echo '<td><img src="images/' . $row["imagen"] . '" alt="' . $row["titulo"] . '" width="50" height="75"></td>';

        if ($nivelUsuario == 1) {
            echo '<td><button onclick="editarLibro(' . $row["id"] . ')">Editar</button>';
            echo '<button onclick="eliminarLibro(' . $row["id"] . ')">Eliminar</button></td>';
        }

        echo '</tr>';
    }

    echo '</table>';
} else {
    echo "No se encontraron libros.";
}
