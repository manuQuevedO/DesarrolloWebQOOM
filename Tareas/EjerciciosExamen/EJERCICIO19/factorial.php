<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Factorial</h1>
    <?php
        $numero = $_COOKIE['mi_numero'];

        // Calcular el factorial
        $factorial = 1;
        for ($i = 1; $i <= $numero; $i++) {
            $factorial *= $i;
        }

        echo "El factorial de $numero es: $factorial";
    ?>
</body>
</html>