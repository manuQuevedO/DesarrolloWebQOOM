function cargarContenido(abrir){
    var contenedor = document.getElementById('der');
    contenedor = document.getElementById('der');
    var ajax = new XMLHttpRequest();
    ajax.open("GET", abrir, true);
    ajax.onreadystatechange = function(){
        if (ajax.readyState == 4){
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function crearAlumno(){
    var nombre = document.getElementById('nombre').value;
    var estatura = document.getElementById('estatura').value;
    var colorOjos = document.getElementById('colorOjos').value;
    var colorPelo = document.getElementById('colorPelo').value;
    var colorPiel = document.getElementById('colorPiel').value;
}

