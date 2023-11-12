<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div id="menu"></div>
    <div id="mensaje"></div>
    <form id="loginForm">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br>

        <label for="captcha">Captcha:</label>
        <input type="text" id="captcha" name="captcha" required>
        <img src="captcha.php" alt="Captcha"><br>

        <button type="button" onclick="autenticar()">Iniciar sesión</button>
    </form>

    <a class="a" href="javascript:autenticar()" id="boton2">2</a>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="script.js"></script>
</body>

</html>