<?php

$cadena1 = $_POST["cadena1"];
$cadena2 = $_POST["cadena2"];


if (strpos($cadena1, $cadena2) !== false) {

    $resultado = $cadena1 . " tiene la palabra " . $cadena2;

    echo $resultado;


    $cadena1_sin_cadena2 = str_replace($cadena2, '', $cadena1);
    echo "<br>";
    echo "Cadena1 sin la palabra $cadena2: " . $cadena1_sin_cadena2;
} else {

    $resultado = $cadena1 . " no contiene la palabra " . $cadena2;

    echo $resultado;
}
