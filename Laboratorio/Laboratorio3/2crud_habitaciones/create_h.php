<?php
$id_tipo_habitacion = $_POST['id_tipo_habitacion'];
$bano_privado = $_POST['bano_privado'];
$espacio = $_POST['espacio'];
$precio = $_POST['precio'];

include('conexion.php');

$sql = "INSERT into habitacion (id_tipo_habitacion,bano_privado,espacio,precio) 
VALUES ('$id_tipo_habitacion','$bano_privado','$espacio',$precio)";
echo $sql;
if ($con->query($sql) === TRUE) {
    echo "Se creo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

<meta http-equiv="refresh" content="3; url=read_h.php" />