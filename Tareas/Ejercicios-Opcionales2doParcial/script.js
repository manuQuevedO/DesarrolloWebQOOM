
function cargarContenido(abrir) {
    var contenedor;
    contenedor = document.getElementById('contenido');
    var ajax = new XMLHttpRequest() //crea el objeto ajax 
    ajax.open("get", abrir, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

var turno = 'X';

function cambiarTurno() {
    turno = (turno === 'X') ? 'O' : 'X';
    document.getElementById('mensaje').textContent = 'Turno: ' + turno;
}

function ocuparCasilla(casilla) {
    if (casilla.value === '') {
        casilla.value = turno;
        casilla.disabled = true;
        cambiarTurno();
    }
}

function pregunta2(){
    fetch("tabla.html")
    .then(response => response.text())
    .then(data => contenido.innerHTML = data);
}

function crearTabla(){
    let form = document.getElementById('calc_form')
    let datos = new FormData(form)
    let table = document.getElementById('table')
    table.innerHTML = ""
    fetch("calcular.php", {method: 'POST', body: datos})
    .then(response => response.json())
    .then(data => {
        data.forEach(fila => {
            table.innerHTML += `<tr>
                <td>${fila.valor1}</td>
                <td>${fila.signo}</td>
                <td>${fila.valor2}</td>
                <td>${fila.signo2}</td>
                <td>${fila.resultado}</td>
            </tr>`
        });
    });
}

function generarTabla() {
    var num = parseInt(document.getElementById("numero1").value);
    var num2 = parseInt(document.getElementById("numero2").value);
    var operacion = document.querySelector('input[name="operacion"]:checked').value;
    var resultado = document.getElementById("resultado");

    resultado.innerHTML = ""; // Limpiar el contenido anterior

    if (isNaN(num) || num < 1 || num >= 10) {
        resultado.innerHTML = "Ingrese un número válido (menor a 10) en el primer cuadro.";
        return;
    }

    for (i = 1; i <= num2; i++) {  
        var signo;
        var res;
        if (operacion === "suma") {
            res = (num + i);
            signo = "+";
        } else if (operacion === "resta") {
            res = (num - i);
            signo = "-";
        } else if (operacion === "multiplicacion") {
            res = (num * i);
            signo = "*";
        } else if (operacion === "division") {
            res = (num / i);
            signo = "/";
        }
        resultado.innerHTML += num + " " + signo + " " + i + " = " + res + "<br>";

    }
}

function cambiarImagen() {
    var libroSeleccionado = document.getElementById("libros").value;
    var imagenes = document.getElementsByClassName("imagen");

    for (var i = 0; i < imagenes.length; i++) {
        imagenes[i].style.display = "none";
    }

    document.getElementById(libroSeleccionado).style.display = "block";
}