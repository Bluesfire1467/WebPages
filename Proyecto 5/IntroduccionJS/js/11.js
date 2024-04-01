// Objetos
const producto = {
    nombreProducto : "Monitor 20 Pulgadas",
    precio : 300,
    disponible : true
}

//const precioProducto = producto.precio;
//const nombreProducto = producto.nombreProducto;

//console.log(precioProducto, nombreProducto)

const {precio, nombreProducto} = producto;

console.log(precio, nombreProducto)