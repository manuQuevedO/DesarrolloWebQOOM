function agregar() {
    var Input = document.getElementById("input");
    var elemento = Input.value.trim();
    Input.value = "";
  
    if (elemento !== "") {
      var lista = document.getElementById("lista-compras");
      var li = document.createElement("li");
  
      if (elemento.toLowerCase().includes(" de ")) {
        li.classList.add("resaltar");
      }
  
      li.textContent = elemento;
      lista.appendChild(li);
    }
  }
  