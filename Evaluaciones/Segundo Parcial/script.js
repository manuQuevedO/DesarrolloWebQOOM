let contenido = document.getElementById('principal')

function cargarContenido(abrir) {
    var contenedor = document.getElementById('principal');
    var ajax = new XMLHttpRequest()
    ajax.open("get", abrir, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}


function pregunta2() {
    
    fetch("galeria.php")
        .then(response => response.json())  
        .then(data => {
            document.getElementById('menu').innerHTML = generarBotones(data);
        })
        .catch(error => console.error("Error fetching galeria.php:", error));
}

function mostrarImagenOriginal(imagenNombre) {
    
    document.getElementById('principal').innerHTML = `<img src='images/${imagenNombre}' alt='${imagenNombre}' style='max-width:100%; max-height:100%; display:block; margin:auto;'>`;

   
    document.getElementById('mensaje').textContent = `Nombre de la imagen: ${imagenNombre}`;
}

function generarBotones(data) {
    
    return data.map(imagen => `<button onclick="mostrarImagenOriginal('${imagen.nombre}')">
                                  <img src='images/${imagen.nombre}' alt='${imagen.nombre}' style='width:50px; height:75px;'>
                               </button>`)
               .join('');
}


function cargargaleria(){
    fetch('galeria.php')
    .then(response => response.text())
    .then(data => {
      document.getElementById('menu').innerHTML = data;
    });
}


function cargarmenu(){
    var contenedor = document.getElementById('menu');
    var ajax = new XMLHttpRequest()
    mensaje.innerHTML = "Nombre: Quevedo Oliva Manuel  CU:10387247";
    ajax.open("GET", `botones.html`, false);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function cambiarImagen() {
    var libroSeleccionado = document.getElementById("libros").value;
    var imagenes = document.getElementsByClassName("imagen");

    for (var i = 0; i < imagenes.length; i++) {
        imagenes[i].style.display = "none";
    }

    document.getElementById(libroSeleccionado).style.display = "block";
}


function pregunta3() {
    cargarFormularioLogin();
    $('#principal').html('');
    $('#mensaje').html('');
}

function cargarFormularioLogin() {
    $('#menu').load('login.php');
}


function autenticar() {
    var formulario = $('#loginForm');
    $.ajax({
        type: 'POST',
        url: 'autenticar.php',
        data: formulario.serialize(),
        dataType: 'json',
        success: function (data) {
            if (data.error) {
                $('#mensaje2').text(data.error);
            } else {
                $('#principal').html('<h2>' + data.mensaje + ' - ' + data.nivel + '</h2>');
                cargarMenu();
            }
        },
        error: function () {
            console.error('Error en la solicitud AJAX');
        }
    });

    $('#menu').html('');
    $('#mensaje').html('');
    $('#mensaje2').html('');
}

