<?php
include("funciones.php");

if(isset($_POST['cadena'])) {
    $cadena = $_POST['cadena'];
    $palabraMasLarga = PalabraMasLarga($cadena);
    echo "La palabra más larga es: $palabraMasLarga";
}
?>
