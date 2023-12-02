<?php
session_start();

$usuario = $_POST['usuario'];
$contrasena = sha1($_POST['password']);

include('conexion.php');

$sql = "SELECT id, usuario FROM usuarios WHERE usuario = '$usuario' AND password = '$contrasena'";
$resultado = $con->query($sql);

if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();

    // Almacenar el ID del usuario en la sesión
    $_SESSION['usuario_id'] = $fila['id'];
    $_SESSION['usuario'] = $fila['usuario'];

    // Redirigir a index.php
    header("location: index.php");
    exit();
} else {
?>
    Error: Usuario o contraseña no válidos.
    <meta http-equiv="refresh" content="3; url=login.html" />
<?php
}
?>