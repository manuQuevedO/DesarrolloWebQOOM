<?php
$numeros = range(1, 20);
$numerosPares = array();
$numerosImpares = array();

foreach ($numeros as $numero) { // Iteramos sobre todos los números
    if ($numero % 2 == 0) { // Si el número es par
        $numerosPares[] = $numero; // Lo añadimos al array de números pares
    } else { // Si no
        $numerosImpares[] = $numero; // Lo añadimos al array de números impares
    }
}

echo "Números pares: " . implode(", ", $numerosPares) . "<hr>";
echo "Números impares: " . implode(", ", $numerosImpares);
?>
