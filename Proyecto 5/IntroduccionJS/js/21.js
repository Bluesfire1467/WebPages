// Arrow function
const sumar2 = (n1, n2) => console.log(n1 + n2);
sumar2(2, 5)

const aprendiendo = tecnologia => console.log(`Aprendiendo ${tecnologia}`)
aprendiendo("JavaScript")

const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'];

const carrito = [
    { nombre : 'Monitor 20 Pulgadas', precio : 500 },
    { nombre : 'Television', precio : 700 },
    { nombre : 'Tablet', precio : 300 },
    { nombre : 'Audifonos', precio : 200 },
    { nombre : 'teclado', precio : 50 },
    { nombre : 'Celular', precio : 500 },
    { nombre : 'Bocinas', precio : 300 },
    { nombre : 'Laptop', precio : 800 }
]

// forEach
meses.forEach(  mes => {
    if(mes == 'Marzo'){
        console.log("Si existe Marzo")
    }
} )

// Some ideal para arreglo de objetos
resultado = carrito.some( producto => producto.nombre === "Laptop" )
// console.log(resultado)

// Reduce
resultado = carrito.reduce((total, producto) => total + producto.precio, 0)
// console.log(resultado)

// Filter
resultado = carrito.filter( producto => producto.precio > 400
 )
// console.log(resultado)

resultado = carrito.filter( producto => producto.nombre !== 'Celular')
console.log(resultado)

