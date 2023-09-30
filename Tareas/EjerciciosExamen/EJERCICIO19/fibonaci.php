<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Serie de Fibonacci</h1>
    <?php
        $numero = $_COOKIE['mi_numero'];

        // Calcular la serie de Fibonacci
        $a = 0;
        $b = 1;

        echo "La serie de Fibonacci hasta el $numero es: ";

        if ($numero >= 1) {
            echo $a;
        }

        for ($i = 2; $i <= $numero; $i++) {
            echo ", $b";
            $c = $a + $b;
            $a = $b;
            $b = $c;
        }
    ?>
</body>
</html>
