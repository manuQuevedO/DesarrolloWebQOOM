<?php
include('conexion.php');
$id = $_POST['id'];
$calificacion = $_POST['calificacion'];
$sql = "UPDATE alumnos SET calificacion = $calificacion WHERE id = $id";
mysqli_query($con, $sql);
