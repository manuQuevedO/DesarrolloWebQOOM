<?php
if(isset($_GET['numero'])) {
    $numero = intval($_GET['numero']);

    echo "<style>";
    echo "table { border-collapse: collapse; }";
    echo "td { width: 30px; height: 30px; text-align: center; }";
    echo "</style>";

    echo "<table border='1'>";
    for ($fila = 0; $fila < $numero; $fila++) {
        echo "<tr>";
        for ($col = 0; $col < $numero; $col++) {
            $color = ($fila + $col) % 2 == 0 ? 'white' : 'black';
            echo "<td style='background-color: $color;'></td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Por favor, ingrese un número válido.";
}
?>
