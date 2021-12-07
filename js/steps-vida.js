var currentTab = 0; // La pestaña actual está configurada para ser la primera pestaña (0)
showTab(currentTab); // Mostrar la pestaña actual

function showTab(n) {
  // Esta función mostrará la pestaña especificada del formulario ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... y arregle los botones Anterior / Siguiente:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Enviar";
  } else {
    document.getElementById("nextBtn").innerHTML = "Siguiente";
  }
  // ... y ejecute una función que muestre el indicador de paso correcto:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // Esta función determinará qué pestaña mostrar
  var x = document.getElementsByClassName("tab");
  // Salga de la función si algún campo de la pestaña actual no es válido:
  if (n == 1 && !validateForm()) return false;
  // Ocultar la pestaña actual:
  x[currentTab].style.display = "none";
  // Aumentar o disminuir la pestaña actual en 1:
  currentTab = currentTab + n;
  // si ha llegado al final del formulario ...:
  if (currentTab >= x.length) {

    // Se muestra el spinner y se ocultan botones y pasos
    sending.classList.add('active')
    document.getElementById("prevBtn").style.display = "none";
    document.getElementById("nextBtn").style.display = "none";
    var step_sending = document.getElementsByClassName("step");
    for (i = 0; i < step_sending.length; i++) {
      step_sending[i].style.display = "none";
    }
    
    //...el formulario se envía:
    // REMPLAZAR ESTE NUMERO POR EL DE CONFIG
    verifyRecaptcha('form_seguros', '6LdJXzsdAAAAAAYc71tTyUAAeyY5Z8ijDj_1XlyS', 'validarSeguros' )
    // document.getElementById("form_seguros").submit();
    return false;
  }
  // De lo contrario, muestre la pestaña correcta:
  showTab(currentTab);
}

function validateEmail(email) {
  const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email)
}

function validateForm() {
  // Esta función se ocupa de la validación de los campos del formulario.
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");

  // Un bucle que verifica cada campo de entrada en la pestaña actual:
  for (i = 0; i < y.length; i++) {

    if (y[i].type === 'email') { // Si el input es de tipo email
      if (!this.validateEmail(y[i].value)) {
        y[i].className += " invalid";
        valid = false;
      }
    }
    
    // Si un campo está vacío ...
    if (y[i].value == "") {
      // agregue una clase "inválida" al campo:
      y[i].className += " invalid";
      // y establezca el estado valid actual en falso:
      valid = false;
    }
  }
  // Si el estado valid es verdadero, marque el paso como terminado y válido:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // devolver el estado valid
}

function fixStepIndicator(n) {
  // Esta función elimina la clase "activa" de todos los pasos ...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... y agrega la clase "activa" al paso actual:
  x[n].className += " active";
}




