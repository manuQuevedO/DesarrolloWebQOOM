<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>División</h1>
    <?php
        $numero = $_COOKIE['mi_numero'];

        if ($numero == 0) {
            echo 'No se puede dividir por cero.';
        } else {
            $resultado = $numero / 2;
            echo "La división de $numero entre 2 es: $resultado";
        }
    ?>
</body>
</html>