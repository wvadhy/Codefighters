// Bootstraps form validation

'use strict'

const forms = document.querySelectorAll('.needs-validation')
const pswrd = document.getElementById("pswrd")

Array.from(forms).forEach(form => {
  form.addEventListener('submit', event => {
    if (!form.checkValidity()) {
      event.preventDefault()
      event.stopPropagation()
    }
    else
    {
      if(pswrd.value.length >= 8)
      {
        window.open("loading.html")
      }
      else
      {
        event.preventDefault()
        event.stopPropagation()
      }
    }

    form.classList.add('was-validated')
  }, false)
})

// Tooltips

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
