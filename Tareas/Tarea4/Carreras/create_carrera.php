<?php
include("conexion.php");
$nombre = $_POST['nombre'];

$sql = "INSERT INTO carrera(nombre) values
 ('$nombre') ";

//echo $sql;
if ($con->query($sql) === TRUE) {
    echo "Se creo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
<meta http-equiv="refresh" content="3; url=read.php" />