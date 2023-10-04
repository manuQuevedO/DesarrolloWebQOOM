<?php
error_reporting(E_ALL ^ E_WARNING);
?>
<?php

if (!isset($_GET['orden'])) {
    $orden = 'id';
} else {
    $orden = $_GET['orden'];
}
if (!isset($_GET['buscar'])) {
    $buscar = "'%'";
} else {
    $buscar = "'%" . str_replace(" ", "%", $_GET['buscar']) . "%'";
}


include('conexion.php');
$sql = "SELECT id,descripcion,numeros_camas FROM tipo_habitacion
where descripcion like $buscar 
order by $orden
";
echo $sql;
$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
?>
    <div>
        <form action="read_t.php" method="get">
            <label for="buscar">Buscar</label>
            <input type="text" name="buscar" value="<?php echo isset($_GET['buscar']) ? $_GET['buscar'] : ''; ?>">
            <input type="submit" value="Buscar">
        </form>
    </div>
    <table>
        <tr>
            <th><a href="read_t.php?orden=id"> ID </a></th>
            <th><a href="read_t.php?orden=descripcion">DESCRIPCION</a> </th>
            <th><a href="read_t.php?orden=numero_camas">NUMERO DE CAMAS</a></th>

            <th>Operaciones</th>
        </tr>
        <?php while ($row = $resultado->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $row['id'] ?> </td>
                <td><?php echo $row['descripcion'] ?> </td>
                <td><?php echo $row['numero_camas'] ?></td>
                <td>

                    <a href="form_update_t.php?id=<?php echo $row['id']; ?>">Editar</a>
                    <a href="delete_t.php?id=<?php echo $row['id']; ?>">Eliminar</a>
                </td>

            </tr>
        <?php } ?>
    </table>


<?php
} else {
    echo "la tabla no tiene datos que mostrar";
}
?>
<a href="form_create_t.html">Insertar</a>

<?php

$con->close();
?>