<?php

// Si se ha enviado el formulario
if(isset($_GET['numero'])) {

    $numero = intval($_GET['numero']);

    echo "<table border='1'>";
    echo "<style>";
    echo "table { border-collapse: collapse; }";
    echo "td { width: 80px; height: 80px; }";
    echo "</style>";
    

    for ($fila = 0; $fila < $numero; $fila++) {
        echo "<tr>";

        for ($col = 0; $col < $numero; $col++) {
            $color = ($fila + $col) % 2 == 0 ? 'white' : 'yellow';
            echo "<td style='background-color: $color;'></td>";
        }

        echo "</tr>";
    }

    echo "</table>";
} 

