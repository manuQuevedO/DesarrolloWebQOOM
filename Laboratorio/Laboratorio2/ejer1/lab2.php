<!DOCTYPE html>
<html>

<head>
    <title>Lab2</title>
</head>
<link rel="stylesheet" href="php.css">

<body>
    <div class="cuadro">
        <h3>Resultado:</h3>
        <?php
        $cantidad = $_POST['cantidad'];
        $unidad_entrada = $_POST['unidad_entrada'];
        $unidad_destino = $_POST['unidad_destino'];


        $medidas = array(
            'milimetro' => array('milimetro' => 1, 'centimetro' => 0.1, 'decimetro' => 0.01, 'metro' => 0.001, 'kilometro' => 0.000001),
            'centimetro' => array('milimetro' => 10, 'centimetro' => 1, 'decimetro' => 0.1, 'metro' => 0.01, 'kilometro' => 0.00001),
            'decimetro' => array('milimetro' => 100, 'centimetro' => 10, 'decimetro' => 1, 'metro' => 0.1, 'kilometro' => 0.0001),
            'metro' => array('milimetro' => 1000, 'centimetro' => 100, 'decimetro' => 10, 'metro' => 1, 'kilometro' => 0.001),
            'kilometro' => array('milimetro' => 1000000, 'centimetro' => 100000, 'decimetro' => 10000, 'metro' => 1000, 'kilometro' => 1)
        );


        $resultado = $cantidad * $medidas[$unidad_entrada][$unidad_destino];

        echo "equivale a $resultado $unidad_destino.";
        ?>
    </div>
</body>

</html>