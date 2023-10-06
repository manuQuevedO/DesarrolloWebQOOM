<?php
error_reporting(E_ALL ^ E_WARNING);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $id = $_GET['id'];
    include('conexion.php');
    $sql = "SELECT id,nro,id_tipo_habitacion,bano_privado,espacio,precio FROM habitacion where id=$id";

    $resultado = $con->query($sql);

    $row = $resultado->fetch_assoc();
    ?>
    <form action="update_h.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?> ">
        <label for="id_tipo_habitacion">Id Tipo:</label>
        <input type="text" name="id_tipo_habitacion" value="<?php echo $row['id_tipo_habitacion']; ?>">
        </div>
        <div>
            <label for="nro">numero de habitacion:</label>
            <input type="number" name="nro" value="<?php echo $row['nro']; ?>">
        </div>
        <div>
            <label for="bano_privado">Bano Privado:</label>
            <input type="number" name="bano_privado" value="<?php echo $row['bano_privado']; ?>">
        </div>
        <div>
            <label for="espacio">Espacio:</label>
            <input type="number" name="espacio" value="<?php echo $row['espacio']; ?>">
        </div>
        <div>
            <label for="precio">Precio:</label>
            <input type="number" name="precio" value="<?php echo $row['precio']; ?>">
        </div>

        <input type="submit" value="Actualizar" style="background-color: darkgoldenrod;">



    </form>

</body>

</html>