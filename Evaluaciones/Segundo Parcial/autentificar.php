<?php
session_start();

if ($_POST['captcha'] != $_SESSION['captcha']) {
    echo json_encode(array('error' => 'Captcha incorrecto'));
    exit;
}

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

if ($usuario == 'usuario_correcto' && $contrasena == 'contrasena_correcta') {

    echo json_encode(array('mensaje' => 'Usuario autenticado', 'nivel' => 'Nivel del usuario'));
} else {

    echo json_encode(array('error' => 'Usuario o contraseña incorrectos'));
}
