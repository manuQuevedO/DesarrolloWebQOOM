<?php

include('conexion.php');


$query = "SELECT id, correo, nombre, rol FROM usuario";

$result = $con->query($query);

if ($result) {
    // Muestra los datos en una tabla
    echo "<table border='1'>
            <tr>
                <th>Correo</th>
                <th>Nombre</th>
                <th>Rol</th>
                <th>Operación</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['correo'] . "</td>
                <td>" . $row['nombre'] . "</td>
                <td>" . ($row['rol'] == 'Administrador' ? 'Administrador' : 'Usuario') . "</td>
                <td>
                <select name='nuevoRol[]'>
                    <option value='Administrador'>Administrador</option>
                    <option value='Usuario'>Usuario</option>
                </select>
            </td>
            <td>
                <input type='hidden' name='id[]' value='" . $row['id'] . "'>
                <input type='submit' name='cambiarRol' value='Cambiar Rol'>
            </td>
        </tr>";



        echo "</td></tr>";
    }

    echo "</table>";
} else {
    echo "Error al ejecutar la consulta: " . $con->error;
}
