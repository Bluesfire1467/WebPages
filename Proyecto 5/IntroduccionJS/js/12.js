//"use strict";  //Correr Js en modo estricto
// Objetos
const producto = {
    nombreProducto : "Monitor 20 Pulgadas",
    precio : 300,
    disponible : true
}
const producto1 = {
    nombreProducto : "Monitor 20 Pulgadas",
    precio : 300,
    disponible : true
}

// Bloquea los atributos
Object.freeze(producto)
Object.seal(producto1)

producto.imagen = 'imagen.jpg';
delete producto.imagen

producto1.imagen = 'imagen.jpg';
delete producto1.imagen
producto1.precio = 'Nuevo precio'

console.log(producto)
console.log(producto1)

// La diferencia entre freeze y seal
// freeze no permite agregar, eliminar y modificar propiedades
// seal no permite agregar, y borrar pero si modificar