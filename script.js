// Colour gradient on page scroll

const [red, green, blue] = [43, 43, 76]
const section1 = document.querySelector('body')

window.addEventListener('scroll', () => {
  let y = 1 + (window.scrollY || window.pageYOffset) / 150
  y = y < 1 ? 1 : y
  const [r, g, b] = [red/y, green/y, blue/y].map(Math.round)
  section1.style.backgroundColor = `rgb(${r}, ${g}, ${b})`
})


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
