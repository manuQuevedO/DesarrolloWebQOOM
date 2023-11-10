<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST["usuario"];
    $contrasenia = $_POST["contrasenia"];

    if ($usuario === "admin" && $contrasenia === "123") {
        session_start();
        $_SESSION["nivel"] = "autenticado correctamente";
        echo "autenticado correctamente";
    } else {
        echo "no autenticado";
    }
}
