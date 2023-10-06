<?php
$id = $_POST['id'];
$nro = $_POST['nro'];
$id_tipo_habitacion = $_POST['id_tipo_habitacion'];
$bano_privado = $_POST['bano_privado'];
$espacio = $_POST['espacio'];
$precio = $_POST['precio'];
include('conexion.php');

$sql = "UPDATE habitacion SET  id='$id',nro='$nro',id_tipo_habitacion='$id_tipo_habitacion',bano_privado='$bano_privado',espacio='$espacio',precio='$precio'
WHERE id=$id";


echo $sql;
if ($con->query($sql) === TRUE) {
    echo "Se actualizo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

<meta http-equiv="refresh" content="3; url=read_h.php" />