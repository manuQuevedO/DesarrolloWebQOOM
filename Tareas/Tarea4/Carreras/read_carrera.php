<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Carreras</title>
    <link rel="stylesheet" type="text/css" href="styles_C.css">
</head>

<body>
    <div class="body">
        <?php
        include('conexion.php');

        $sql = "SELECT * FROM carrera WHERE nombre IS NOT NULL AND nombre <> ''";
        $resultado = $con->query($sql);

        if ($resultado->num_rows > 0) {
        ?>
            <table class="tabla">
                <tr>
                    <th>Nombre de la Carrera</th>
                    <th>Operaciones</th>
                </tr>
                <?php while ($row = $resultado->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['nombre']; ?></td>
                        <td>
                            <a href="formu_update_carrera.php?id=<?php echo $row['id']; ?>">Editar</a>
                            <a href="delete_carrera.php?id=<?php echo $row['id']; ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        <?php } else { ?>
            <div>No existen carreras registradas.</div>
        <?php } ?>

        <a href="formu_carrera.php">Agregar Carrera</a>
    </div>
</body>

</html>