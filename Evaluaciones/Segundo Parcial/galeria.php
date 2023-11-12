<?php


$host = "localhost";
$usuario = "root";
$clave = "";
$base_de_datos = "bd_biblioteca";


$conexion = mysqli_connect($host, $usuario, $clave, $base_de_datos);


if (!$conexion) {
    die("La conexión a la base de datos ha fallado: " . mysqli_connect_error());
}



$query = "SELECT * FROM libros";
$result = mysqli_query($conexion, $query);

if ($result) {
    $imagenes = array();



    while ($row = mysqli_fetch_assoc($result)) {
        $imagen = array(
            'id' => $row['id'],
            'nombre' => 'images' . $row['imagen'],

        );
        array_push($imagenes, $imagen);
    }



    echo json_encode($imagenes);
} else {

    echo json_encode(array('error' => 'Error en la consulta'));
}


mysqli_close($conexion);
