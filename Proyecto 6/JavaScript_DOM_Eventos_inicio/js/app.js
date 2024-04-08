// Querry Selector
const heading = document.querySelector(".header__texto h2") //retorna 0 o 1 elementos
heading.textContent = 'Nuevo Texto';
heading.classList.add('nueva-clase')

// querySelectorAll
const enlaces = document.querySelectorAll(".navegacion a")
enlaces[0].textContent = 'Nuevo Enlace'
enlaces[0].href = 'https://google.com'

// getElementById
heading2 = document.getElementById('heading')
// Ya no se utiliza

// generar un nuevo enlace
const nuevoEnlace = document.createElement('A')
// href
nuevoEnlace.href = 'nuevo-enlace.html'
// texto
nuevoEnlace.textContent = 'Un nuevo enlace'
// clase
nuevoEnlace.classList.add('navegacion__enlace')
// Agregar al documento
const navegacion = document.querySelector('.navegacion')
navegacion.appendChild(nuevoEnlace)