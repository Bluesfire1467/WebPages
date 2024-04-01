// Classes

class Producto {
    constructor(nombre, precio) {
        this.nombre = nombre
        this.precio = precio
    }

    formatearProducto() {
        return `El producto ${this.nombre} tiene un precio de ${this.precio}`
    }

    obtenerPrecio() {
        console.log(this.precio)
    }

}

const Producto2 = new Producto("Monitor Curvo de 49'", 800);
const Producto3 = new Producto("Laptop", 500, true);

//Herencia
class Libro extends Producto{
    constructor(nombre, precio, isbn) {
        super(nombre, precio)
        this.isbn = isbn
    }

    formatearProducto() {
        return `${super.formatearProducto()} y su ibsn es ${this.isbn}`
    }

    obtenerPrecio() {
        super.obtenerPrecio();
        console.log("y si hay existencia")
    }
}

const libro = new Libro("JavaScript La revolución", 120, '1231231245523')
console.log(libro.formatearProducto())
console.log(libro.obtenerPrecio())

console.log(Producto2)
console.log(Producto3)
