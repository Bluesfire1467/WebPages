// Eventos
// console.log(1)
window.addEventListener('load', function () { // Load espera a que js y los archivos qye dependen de html estén listos
    // console.log(2)
})

window.onload = function (){ //es lo mismo que load
    // console.log(3)
}

document.addEventListener('DOMContentLoaded', function () { // Solo espera que se descargue el HTM, pero no espera CCS o imagenes
    // console.log(4)
})

// console.log(5)

// window.onscroll = function () {
//     console.log("scrolling...")
// }




// Seleccionar un elemento y asignarle un evento
const btnEnviar = document.querySelector('.boton--primario');
/*btnEnviar.addEventListener('click', function (evento) {
    console.log(evento)
    //evento.preventDefault()

    // Validar formulario

    console.log('Enviando formulario')
})*/



// Eventos de input y textarea

const datos = {
    nombre : '',
    email : '',
    mensaje : ''
}

const nombre = document.querySelector("#nombre")
const email = document.querySelector("#email")
const mensaje = document.querySelector("#mensaje")
const formulario = document.querySelector('.formulario')

// Evento para submit
formulario.addEventListener('submit', function (e) {
    e.preventDefault()

    // validar formulario
    const {nombre, mensaje, email} = datos

    if (nombre === '' || email === '' || mensaje === '') {
        mostrarAlerta("¡Todos los campos son obligatorios!", "error")
        return
    }

    mostrarAlerta("¡El formulario se ha enviado correctamente!", "correcto")
})



nombre.addEventListener('input', leerDatos)

email.addEventListener('input', leerDatos)

mensaje.addEventListener('input', leerDatos)

function leerDatos (e) {
    datos[e.target.id] = e.target.value

    //console.log(datos)
}

function mostrarAlerta(mensaje, clase){
    const error = document.createElement('p')
    error.textContent = mensaje
    error.classList.add(clase)

    formulario.appendChild(error)

    // Desaparece despues de 3s
    setTimeout(() => {
        error.remove()
    }, 3000)
}
