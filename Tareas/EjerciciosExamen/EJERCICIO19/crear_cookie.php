<?php

$numero = $_POST['numero'];
setcookie("mi_numero", $numero, time() + 3600 * 60);

if (!isset($_COOKIE['contador'])) {
  setcookie("contador", 1, time() + 3600 * 60);
  $contador = 1;
} else {
  $contador = $_COOKIE['contador'];
  $contador++;
  setcookie("contador", $contador, time() + 3600 * 60);
}

//echo "esta es la $contador vez que visita este sitio";
?>
<meta http-equiv="refresh" content="3; url=menu.php" /> <!-- Redirige a la página del menú -->