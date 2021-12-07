const form = document.getElementsByTagName('form')[0]
const inputs = form.getElementsByTagName('input')
const textarea = form.getElementsByTagName('textarea')[0]

function submitFormContacto(form) {

  let formValidated = validateForm()

  if (formValidated) {
    sending.classList.add('active')
    // REMPLAZAR ESTE NUMERO POR EL DE CONFIG
    verifyRecaptcha(form, '6LdJXzsdAAAAAAYc71tTyUAAeyY5Z8ijDj_1XlyS', 'validarFormularioContacto' )
  }

}

function validateForm() {

  validForm = true

  textarea.classList.remove("invalid")

  if (textarea.value == "" ) {

    textarea.className += " invalid"
    validForm = false
    
  }

  for (i = 0; i < inputs.length; i++) {

    inputs[i].classList.remove("invalid")

    if (inputs[i].type === 'email') { // Si el input es de tipo email
      if (!this.validateEmail(inputs[i].value)) {
        inputs[i].className += " invalid"
        validForm = false
      }
    }

    if (inputs[i].value == "" ) {

      inputs[i].className += " invalid"
      validForm = false
      
    }

  }

  return validForm

}

function validateEmail(email) {
  const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email)
}