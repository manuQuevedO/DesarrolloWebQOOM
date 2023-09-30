//Pmrama en PHP que solicite mediante formularó GET el valor de b y h luego llamar
//a la página area_php que calcula área de un Cuya formula es b*h/2

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="area.php" method="GET">
        <label for="base">Base</label>
        <input type="text" name="b" id="base">
        <br>
        <label for="altura">Altura</label>
        <input type="text" name="a" id="altura">
        <br>
        <input type="submit" value="Enviar">
    </form>

</body>

</html>