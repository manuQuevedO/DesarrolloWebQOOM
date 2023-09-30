<?php
$n = $_GET['n'];

$dias = array(
	1 => 'Lunes',
	2 => 'Martes',
	3 => 'Miércoles',
	4 => 'Jueves',
	5 => 'Viernes',
	6 => 'Sábado',
	7 => 'Domingo'
);

echo '<select>';

foreach ($dias as $key => $value) {
	$selected = ($key == $n) ? 'selected' : '';
	echo "<option value=\"$key\" $selected>$value</option>";
}

echo '</select>';
?>
