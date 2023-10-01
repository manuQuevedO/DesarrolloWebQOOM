<?php

$mes = $_POST["mes"];
$ano = $_POST["ano"];

// Obtener el número de días en el mes seleccionado
$numeroDias = cal_days_in_month(CAL_GREGORIAN, date("n", strtotime("$mes 1, $ano")), $ano);

echo "<h1>Calendario de $mes $ano</h1>";
echo "<table border='1'>";
echo "<tr><th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th><th>Sábado</th><th>Domingo</th></tr>";
