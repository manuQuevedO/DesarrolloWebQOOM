<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Sumatoria</h1>
    <?php

        $numero = $_COOKIE['mi_numero'];

        // Calcular la sumatoria
        $sumatoria = 0;
        for ($i = 1; $i <= $numero; $i++) {
            $sumatoria += $i;
        }

        echo "La sumatoria de los números del 1 al $numero es: $sumatoria";
    ?>
</body>
</html>