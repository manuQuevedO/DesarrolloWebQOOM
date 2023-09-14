<!DOCTYPE html>
<html>

<head>
    <title>lab2</title>
</head>

<body>
    <h2>Llenar con numeros:</h2>
    <?php
    $n = $_POST['numero'];
    ?>

    <form action="eliminar.php" method="post">
        <?php
        for ($i = 0; $i < $n; $i++) {
            echo '<label for="valor' . $i . '">casillas ' . ($i + 1) . ':</label>';
            echo '<input type="number" name="valores[]" id="valor' . '"><br>';
            echo '<input type="hidden" name="n" >';
        }
        ?>
        <label for="mayor">A partir de que numero se eliminaran:</label>
        <input type="number" name="mayor" id="mayor" required>
        <br>
        <input type="submit" value="Eliminar">
    </form>
</body>

</html>