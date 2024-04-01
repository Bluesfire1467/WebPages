// POO

/* Object Literal */
const producto = {
    nombre : "tablet",
    precio : 500
}

// Object Contructor --- Forma dinamica
function Producto(nombre, precio, disponible= false) {
    this.nombre = nombre
    this.precio = precio
    this.disponible = disponible
}

// Crear funciones que solo se ocupan en un objeto en especifico.
Producto.prototype.formatearProducto = function () {
    return `El producto ${this.nombre} tiene un precio de ${this.precio}`
}

// Instancia de una clase
const Producto2 = new Producto("Monitor Curvo de 49'", 800);
const Producto3 = new Producto("Laptop", 500, true);



function formatearProducto(producto) {
    return `El producto ${producto.nombre} tiene un precio de ${producto.precio}`
}

//Prototype
console.log(Producto2.formatearProducto())

//normal
console.log(Producto3)

//funcion
console.log(formatearProducto(Producto2))


