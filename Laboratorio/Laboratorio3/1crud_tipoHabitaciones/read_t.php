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
$sql = "SELECT id,descripcion,numero_camas FROM tipo_habitacion
where descripcion like $buscar 
order by $orden
";
echo $sql;
$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
?>

    <table>
        <tr style="color: burlywood;">
            <th>Id</th>
            <th>DESCRIPCION</th>
            <th>NUMERO DE CAMAS</th>

            <!-- <th><a href="read_t.php?orden=id"> ID </a></th>
            <th><a href="read_t.php?orden=descripcion">DESCRIPCION</a> </th>
            <th><a href="read_t.php?orden=numero_camas">NUMERO DE CAMAS</a></th> -->

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
                    <a href="delete_t.php?id=<?php echo $row['id']; ?>" ; style="color: red;">Eliminar</a>
                </td>

            </tr>
        <?php } ?>
    </table>


<?php
} else {
    echo "la tabla no tiene datos que mostrar";
}
?>

<div>
    <a href="form_create_t.html" ; style="background-color: orange;" ;class="button">Insertar</a>
</div>

<?php

$con->close();
?>