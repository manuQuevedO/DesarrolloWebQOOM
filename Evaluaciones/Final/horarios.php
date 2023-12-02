<?php
$materia = $_GET['materia'];

include("conexion.php");
$sql = "SELECT dia, hora FROM horarios WHERE materia = '$materia'";
$consulta = mysqli_query($con, $sql);
$dias = array('Hora', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes');
$horas = array('8-9', '9-10', '10-11', '11-12', '12-13', '13-14', '14-15', '15-16', '16-17', '17-18');
$horarios = array();
while ($horario = mysqli_fetch_array($consulta)) {
    array_push($horarios, $horario['dia'] . "-" . $horario['hora']);
}
?>
<table border=1>
    <?php for ($i = 0; $i < 10; $i++) { ?>
        <tr>
            <?php for ($j = 0; $j < 6; $j++) {
                if ($i == 0) { ?>
                    <td style="background-color: #548dd4; color: white"><?php echo $dias[$j] ?></td>
                <?php } else if ($j == 0 && $i > 0) { ?>
                    <td style="background-color: #548dd4; color: white"><?php echo $horas[$i] ?></td>
                <?php } else if (in_array($dias[$j] . "-" . explode("-", $horas[$i])[0], $horarios)) { ?>
                    <td style="background-color: yellow;"></td>
                <?php } else { ?>
                    <td></td>
            <?php }
            } ?>
        </tr>
    <?php } ?>
</table>