<?php
include 'Calculadora.php';


$a = ($_GET['a']);
$b = ($_GET['b']);

setcookie('a', $a);
setcookie('b', $b);

$operacion = $_GET['operacion'];

switch ($operacion) {
    case 'sumar':
        $resultado = sumar($a, $b);
        break;
    case 'restar':
        $resultado = restar($a, $b);
        break;
    case 'multiplicar':
        $resultado = multiplicar($a, $b);
        break;
    case 'dividir':
        $resultado = dividir($a, $b);
        break;
    default:
        $resultado = "Operación no válida";
        break;
}
echo "El resultado de $operacion $a y $b es: $resultado";
