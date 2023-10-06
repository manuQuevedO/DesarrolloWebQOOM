<?php
include('conexion.php');


$tipo_habitacion_id = $_POST['tipo_habitacion_id'];
$numero_habitacion = $_POST['numero_habitacion'];
$precio = $_POST['precio'];


$sql = "INSERT INTO habitaciones (tipo_habitacion_id, numero_habitacion, precio) VALUES (?, ?, ?)";
$stmt = $con->prepare($sql);
$stmt->bind_param("iis", $tipo_habitacion_id, $numero_habitacion, $precio);
$stmt->execute();


$habitacion_id = $stmt->insert_id;


$uploadsDirectory = 'uploads/';

foreach ($_FILES['fotos']['tmp_name'] as $key => $tmp_name) {
    $fotoName = $_FILES['fotos']['name'][$key];
    $fotoTmpName = $_FILES['fotos']['tmp_name'][$key];
    $fotoPath = $uploadsDirectory . $fotoName;


    move_uploaded_file($fotoTmpName, $fotoPath);


    $sql = "INSERT INTO fotos_habitacion (habitacion_id, foto) VALUES (?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("is", $habitacion_id, $fotoPath);
    $stmt->execute();
}

$stmt->close();
$con->close();


header('Location: lista_habitaciones.php');
