<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .button {
        background-color: orange;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        margin: 10px 0;
        cursor: pointer;
    }

    .buttonEditar {
        background-color: blue;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        margin: 10px 0;
        cursor: pointer;
    }



    .delete-button {
        background-color: red;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        margin: 10px 0;
        cursor: pointer;
    }
</style>

<?php
error_reporting(E_ALL ^ E_WARNING);
include('conexion.php');

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

// Consulta SQL para obtener la lista de habitaciones
$sql = "SELECT h.id, h.nro, t.descripcion AS tipo_habitacion, h.bano_privado, h.espacio, h.precio, f.fotografia
        FROM habitacion h
        INNER JOIN tipo_habitacion t ON h.id_tipo_habitacion = t.id
        LEFT JOIN fotos_habitacion f ON h.id = f.id_habitacion
        WHERE t.descripcion LIKE $buscar
        ORDER BY $orden";

$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
?>
    <div>
        <form action="read_h.php" method="get">
            <label for="buscar">Buscar Habitacion</label>
            <input type="text" name="buscar" value="<?php echo isset($_GET['buscar']) ? $_GET['buscar'] : ''; ?>">
            <input type="submit" value="buscar" class="button">
        </form>
    </div>
    <table>
        <tr style="color: aquamarine;">
            <th><a href="read_h.php?orden=id"> ID </a></th>
            <th>NUMERO</th>
            <th>TIPO HABITACION</th>
            <th>BANO PRIVADO</th>
            <th>ESPACIO</th>
            <th>PRECIO</th>
            <th>FOTOS</th>
            <th>Operaciones</th>
        </tr>
        <?php while ($row = $resultado->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $row['id'] ?> </td>
                <td><?php echo $row['nro'] ?> </td>
                <td><?php echo $row['tipo_habitacion'] ?> </td>
                <td><?php echo $row['bano_privado'] ?> </td>
                <td><?php echo $row['espacio'] ?> </td>
                <td><?php echo $row['precio'] ?></td>
                <td>
                    <?php
                    if ($row['fotografia']) {
                        $fotos = explode(",", $row['fotografia']);
                        foreach ($fotos as $foto) {
                            echo "<img src='$foto' width='100' height='100' alt='Foto de habitación'><br>";
                        }
                    }
                    ?>
                </td>
                <td>
                    <a href="form_update_h.php?id=<?php echo $row['id']; ?>" ; class="buttonEditar">Editar</a>
                    <a href="delete_h.php?id=<?php echo $row['id']; ?>" ; style=" color: white;" ; class="delete-button">Eliminar</a>
                </td>
            </tr>
        <?php } ?>
    </table>
<?php
} else {
    echo "La tabla no tiene datos que mostrar";
}
?>
<a href="form_create_h.html" ; style="background-color: orange;" ; class="button">Insertar</a>
<?php
$con->close();
?>