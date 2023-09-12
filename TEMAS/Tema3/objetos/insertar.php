<?php
include('pila.php');
$p=new  pila();
$valor=$_GET['valor'];
$p->insertar($valor);

?>