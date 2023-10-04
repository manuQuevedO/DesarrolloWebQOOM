<?php
error_reporting(E_ALL ^ E_WARNING);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
</head>

<body>
    <?php
    $id = $_GET['id'];
    include('conexion.php');
    $sql = "SELECT id,nro,id_tipo_habitacion,bano_privado,espacio,precio FROM habitacion where id=$id";

    $resultado = $con->query($sql);

    $row = $resultado->fetch_assoc();
    ?>
    <form action="update_t.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?> ">
        <div>
            <label for="descripcion">Descripcion:</label>
            <select id="descripcion" name="descripcion">
                <option value="Simple">Simple</option>
                <option value="Doble">Doble</option>
                <option value="Mtrimonial">Mtrimonial</option>
                <option value="Triple">Triple</option>
                <option value="Cuatruple">Cuatruple</option>

            </select>

        </div>
        <div>
            <label for="numero_camas">Numero de camas:</label>
            <input type="number" name="numero_camas" value="<?php echo $row['numero_camas']; ?>">
        </div>

        <input type="submit" value="Actualizar">



    </form>

</body>

</html>