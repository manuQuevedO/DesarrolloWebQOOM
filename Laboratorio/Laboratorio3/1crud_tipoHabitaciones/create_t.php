<?php
error_reporting(E_ALL ^ E_WARNING);
$id = $_POST['id'];
$descripcion = $_POST['descripcion'];
$numero_camas = $_POST['numero_camas'];

include('conexion.php');

$sql = "INSERT into tipo_habitacion (id,descripcion,numero_camas) 
VALUES ('$id','$descripcion',$numero_camas)";
echo $sql;
if ($con->query($sql) === TRUE) {
    echo "Se creo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

<meta http-equiv="refresh" content="3; url=read_t.php" />