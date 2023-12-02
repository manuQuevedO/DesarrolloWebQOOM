<?php
session_start();

include('conexion.php');
// Verificar si el usuario está autenticado
if (!isset($_SESSION['usuario_id'])) {
    header("location: login.html");
    exit();
}

// Acceder al ID del usuario desde la sesión
$usuario_id = $_SESSION['usuario_id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <div class="container">
        <div class="header">
            <img src="images/usfx.png" class="logo">
            <div class="header-sec">
                <div id="menu">
                    <div class="preguntas">
                        <div class="button" onclick="pregunta(1)">Pregunta 1</div>
                    </div>
                    <div class="linea"></div>
                    <div class="preguntas">
                        <div class="button" onclick="pregunta(2)">Pregunta 2</div>
                    </div>
                    <div class="linea"></div>
                    <div class="preguntas">
                        <div class="button" onclick="pregunta3(3)">Pregunta 3</div>
                    </div>
                    <div class="linea"></div>
                    <div class="preguntas">
                        <div class="button" onclick="pregunta4(4)">Pregunta 4</div>
                    </div>
                    <div class="linea"></div>
                    <div class="preguntas">
                        <div class="button" onclick="pregunta(5)">Pregunta 5</div>
                    </div>
                </div>
                <div id="titulo">

                </div>
            </div>
        </div>
        <div class="content">
            <div id="sub-menu">
                <button id="menu_titulo" class="menu_titulo" onclick="submenu()" value="0">
                    Opciones
                </button>
                <div id="det" class="det">
                    <!-- <div class='detarriba'>
                        <div class='asignatura selected'>Sis256</div>
                    </div>
                    <div class='detabajo'>
                        <div class='asignatura'>Sis258</div>
                    </div>
                    <div class='detabajo'>
                        <div class='asignatura'>Sis406</div>
                    </div> -->
                    <?php
                    // Condiciones para mostrar los divs según el valor de $usuario_id
                    if ($usuario_id == 1) {
                        echo "<div class='detarriba'>
                        <div class='asignatura selected'>Sis256</div>
                        </div>";
                    } elseif ($usuario_id == 2) {
                        echo "<div class='detabajo'>
                        <div class='asignatura'>Sis258</div>
                        </div>";
                    } elseif ($usuario_id == 3) {
                        echo "<div class='detabajo'>
                        <div class='asignatura'>Sis406</div>
                        </div>";
                    }
                    ?>
                </div>

            </div>
            <div id="contenido">
                <!-- <div class="card">
                    <div class="card-arriba">
                        <div><strong>SIS 256 Programacion Web</strong></div>

                        <div>Examen final - 02-12-2023 7:00 am</div>
                    </div>
                    <div class="perfil">
                        <img src="images/perfil.jpg" alt="" class="imagen">
                    </div>
                    <div class="card-abajo">
                        <div><b>Quevedo Oliva Oscar Manuel</b></div>
                        <div>Carrera: Ingenieria de Sistemas</div>
                        <div>Repositorio Examen: <ul><a href="https://github.com/manuQuevedO/DesarrolloWebQOOM">Repositorio</a></ul>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="footer">
            <div id="pie">
                <div>Sucre-Semestre 2-2023</div>
            </div>

        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>