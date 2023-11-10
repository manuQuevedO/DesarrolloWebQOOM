function agrandar() {
  var cantidad = parseInt(document.getElementById("cantidad").value);
  var imagen = document.getElementById("imagen");
  var width = imagen.clientWidth;
  imagen.style.width = (width + cantidad) + "px";
}

function reducir() {
  var cantidad = parseInt(document.getElementById("cantidad").value);
  var imagen = document.getElementById("imagen");
  var width = imagen.clientWidth;
  imagen.style.width = (width - cantidad) + "px";
}
