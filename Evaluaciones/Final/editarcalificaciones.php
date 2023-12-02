<style>
    input {
        border-color: orange;
        border-radius: 5px;
    }
</style>
<?php
$materia = $_GET['materia'];

include("conexion.php");
$sql = "SELECT id, nombres_apellidos, calificacion FROM alumnos WHERE materia = '$materia'";
$consulta = mysqli_query($con, $sql);
$num = 0;
?>
<table border=1>
    <tr style="background-color: #548dd4;">
        <th>Nro.</th>
        <th>Nombre y Apellidos</th>
        <th>Calificacion</th>
    </tr>
    <?php while ($alumno = mysqli_fetch_array($consulta)) {
        $num += 1;
    ?>
        <tr>
            <td><?php echo $num ?></td>
            <td><?php echo $alumno["nombres_apellidos"]; ?></td>
            <td><input type="number" id="<?php echo $alumno["id"] ?>" value="<?php echo $alumno["calificacion"]; ?>" onchange="registrarCalificacion(this)"></td>
        </tr>
    <?php } ?>
</table>