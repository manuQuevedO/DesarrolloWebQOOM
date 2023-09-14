<!DOCTYPE html>
<html>

<head>
    <title>Lab2</title>
</head>

<body>
    <h2>Números</h2>
    <?php
    $valores = $_POST['valores'];
    $n = $_POST['n'];
    $mayor = $_POST['mayor'];

    $filtrar = array_filter($valores, function ($valor) use ($mayor) {
        return $valor <= $mayor;
    });

    if (!empty($filtrar)) {
        echo '<ul>';
        foreach ($filtrar as $valor) {
            echo '<li>' . $valor . '</li>';
        }
        echo '</ul>';
    } else {
        echo 'No hay números menores';
    }
    ?>
</body>

</html>