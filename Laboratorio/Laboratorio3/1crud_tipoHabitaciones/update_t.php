<?php
$id = $_POST['id'];
$descripcion = $_POST['descripcion'];
$numero_camas = $_POST['numero_camas'];
include('conexion.php');

$sql = "UPDATE tipo_habitacion SET  id='$id',descripcion='$descripcion',numero_camas='$numero_camas'
WHERE id=$id";


echo $sql;
if ($con->query($sql) === TRUE) {
    echo "Se actualizo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

<meta http-equiv="refresh" content="3; url=read_t.php" />