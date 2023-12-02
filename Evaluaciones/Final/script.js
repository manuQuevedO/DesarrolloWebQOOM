function numeros(char) {
  var contrasena = document.getElementById("password");
  contrasena.value = contrasena.value + char;
}

function mezclar(array) {
  var ordenActual = array.length,
    aux,
    ordenRandom;

  while (0 !== ordenActual) {
    ordenRandom = Math.floor(Math.random() * ordenActual);
    ordenActual -= 1;

    aux = array[ordenActual];
    array[ordenActual] = array[ordenRandom];
    array[ordenRandom] = aux;
  }

  return array;
}

function generarNumeros() {
  var valoresNumeros = [
    "0",
    "1",
    "2",
    "3",
    "4",
    "5",
    "6",
    "7",
    "8",
    "9",
    "A",
    "C",
  ];
  valoresNumeros = mezclar(valoresNumeros);
  var divNumeros = document.getElementById("numpad");
  for (var i = 0; i < valoresNumeros.length; i++) {
    var button = document.createElement("input");
    button.type = "button";
    button.value = valoresNumeros[i];
    button.onclick = (function () {
      var valorActual = valoresNumeros[i];
      return function () {
        numeros(valorActual);
      };
    })();
    divNumeros.appendChild(button);
    if ((i + 1) % 3 == 0) {
      divNumeros.appendChild(document.createElement("br"));
    }
  }
}

//pregunta1
function pregunta(n) {
  document.getElementById("titulo").innerHTML = "Pregunta " + n;
  if (n == 1) {
    document.getElementById("contenido").innerHTML = ` <div class="card">
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
              </div>`;
  } else if ((n = 2)) {
    document.getElementById("contenido").innerHTML = "";
  }
}

//pregunta3
let selected = "SIS256";
let numero = 0;

let asignuturas = document.querySelectorAll(".asignatura");
asignuturas.forEach((asignatura) => {
  asignatura.addEventListener("click", () => {
    selected = asignatura.innerHTML;
    document.querySelector(".selected").classList.remove("selected");
    asignatura.classList.add("selected");
    palabras = titulo.innerHTML.split(" ");
    if (palabras.length > 1) {
      switch (palabras[0]) {
        case "Lista":
          obtenerTabla();
          break;
        case "Horario":
          pregunta3();
          break;
        case "Materia":
          pregunta4();
          break;
      }
    }
  });
});

function pregunta3(n) {
  //   titulo.innerHTML = `Horario ${selected}`;
  document.getElementById("titulo").innerHTML = "Pregunta " + n;
  var ajax = new XMLHttpRequest();
  ajax.open("GET", `horarios.php?materia=${selected}`, false);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4 && ajax.status == 200) {
      contenido.innerHTML = ajax.responseText;
    }
  };
  ajax.send();
}

//pregunta4
function pregunta4(n) {
  document.getElementById("titulo").innerHTML = "Pregunta " + n;
  fetch(`editarcalificaciones.php?materia=${selected}`)
    .then((response) => response.text())
    .then((data) => (contenido.innerHTML = data));
}

function registrarCalificacion(element) {
  let data = new FormData();
  console.log(element.id);
  data.append("id", element.id);
  data.append("calificacion", element.value);
  var ajax = new XMLHttpRequest();
  ajax.open("POST", `registrarcalificacion.php`, false);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4 && ajax.status == 200) {
    }
  };
  ajax.send(data);
}

//pregunta5

//menu
function submenu() {
  document.getElementById("det").innerHTML =
    "<div class='detarriba'><div class='asignatura'>Sis256</div></div>";
  if (document.getElementById("menu_titulo").value == 0) {
    document.getElementById("menu_titulo").value = 1;
    document.getElementById("det").innerHTML =
      "<div class='detarriba'><div class='asignatura'>Sis256</div></div>";
  } else {
    document.getElementById("menu_titulo").value = 0;
    document.getElementById("det").innerHTML = "";
  }
}
