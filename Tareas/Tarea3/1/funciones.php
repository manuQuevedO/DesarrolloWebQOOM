<!-- funciones.php -->
<?php
// 1. Se divide la cadena en palabras
function PalabraMasLarga($cadena) {
    $palabras = explode(" ", $cadena);
    $palabraMasLarga = "";
    
    // 2. Se recorren las palabras
    foreach ($palabras as $palabra) {
        // 3. Se verifica si la longitud de la palabra es mayor que la longitud de la palabra mas larga
        if (strlen($palabra) > strlen($palabraMasLarga)) {
            // 4. Se reemplaza la palabra mas larga
            $palabraMasLarga = $palabra;
        }
    }
    
    // 5. Se retorna la palabra mas larga
    return $palabraMasLarga;
}
?>
