<?php

$id_tipo_habitacion = $_POST['id_tipo_habitacion'];
$bano_privado = $_POST['bano_privado'];
$espacio = $_POST['espacio'];
$nro = $_POST['nro'];
$precio = $_POST['precio'];


$uploadsDirectory = 'uploads/';

$uploadedFotos = [];

if (!empty($_FILES['fotos']['name'][0])) {
    foreach ($_FILES['fotos']['tmp_name'] as $key => $tmp_name) {
        $fotoName = $_FILES['fotos']['name'][$key];
        $fotoTmpName = $_FILES['fotos']['tmp_name'][$key];
        $fotoPath = $uploadsDirectory . $fotoName;


        move_uploaded_file($fotoTmpName, $fotoPath);
        $uploadedFotos[] = $fotoPath;
    }
}


include('conexion.php');


$sql = "INSERT INTO habitacion (id_tipo_habitacion, bano_privado, espacio, nro, precio) 
        VALUES (?, ?, ?, ?, ?)";

$stmt = $con->prepare($sql);
$stmt->bind_param("iisid", $id_tipo_habitacion, $bano_privado, $espacio, $nro, $precio);

if ($stmt->execute()) {

    $habitacion_id = $stmt->insert_id;


    foreach ($uploadedFotos as $foto) {
        $sql = "INSERT INTO fotos_habitacion (id_habitacion, fotografia) VALUES (?, ?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("is", $habitacion_id, $foto);
        $stmt->execute();
    }

    echo "El registro se creó correctamente.";
} else {
    echo "Error al crear el registro: " . $stmt->error;
}

$stmt->close();
$con->close();


header("refresh:3;url=read_h.php");
