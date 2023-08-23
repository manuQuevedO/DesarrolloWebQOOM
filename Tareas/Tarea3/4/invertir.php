<?php
if(isset($_POST['cadena'])) {
    $cadena = $_POST['cadena'];
    $cadenaInvertida = strrev($cadena);
    echo "Cadena invertida: $cadenaInvertida";
} else {
    echo "Por favor, ingrese una cadena.";
}
?>
