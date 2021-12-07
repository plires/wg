const name = document.getElementById('name')
const email = document.getElementById('email')
const phone = document.getElementById('phone')
const btnSubmit = document.getElementById('send')

function resetAllElements(current) {

  var desplegables = $('.formulario_desplegable')
  var btns_contratar = $('.btn_contratar')
  var inputs = $('input')
  var spinners = $('.spinner')

  for (var i = 0; i < spinners.length; i++) {
    spinners[i].classList.remove('active')
  }

  for (var i = 0; i < inputs.length; i++) {
    inputs[i].classList.remove('invalid')
  }

  for (var i = 0; i < desplegables.length; i++) {
    desplegables[i].classList.remove('show')
  }

  for (i = 0; i < btns_contratar.length; i++) {
    if (btns_contratar[i] != current) {
      btns_contratar[i].innerText = 'CONTRATAR'
    }
  }

}

$('.btn_contratar').click(function(event) {

  resetAllElements($(this)[0])

  formSlice = $(this)[0].parentNode.childNodes[0].parentElement.nextSibling.nextElementSibling

  if ( $(this)[0].innerText == 'CONTRATAR' ) {
    $(this)[0].innerText = 'CERRAR' 
    formSlice.classList.add('show')
  } else {
    $(this)[0].innerText = 'CONTRATAR' 
    formSlice.classList.remove('show')
  }

});

$('.btn_send').click(function(event) {

  let form = event.target.nextSibling.parentElement

  let formValidated = validateForm(form)

  if (formValidated) {

    form.querySelector('.spinner').classList.add('active')
    // REMPLAZAR ESTE NUMERO POR EL DE CONFIG
    verifyRecaptcha(form.id, '6LdJXzsdAAAAAAYc71tTyUAAeyY5Z8ijDj_1XlyS', 'validarSegurosPatrimoniales' )
  }

});

function validateEmail(email) {
  const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email)
}

function validateForm(form) {

  validForm = true

  for (i = 0; i < form.elements.length; i++) {

    form.elements[i].classList.remove("invalid")

    if (form.elements[i].type == 'email') { // Si el input es de tipo email
      if (!validateEmail(form.elements[i].value)) {
        form.elements[i].className += " invalid"
        validForm = false
      }
    } else if (form.elements[i].type === 'text' && form.elements[i].value == "") {

      form.elements[i].className += " invalid"
      validForm = false

    }

  }

  return validForm

}


