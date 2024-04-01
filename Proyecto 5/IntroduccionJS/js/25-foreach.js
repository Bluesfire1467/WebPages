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

// For Each iterar y mostrar
const arreglo1 = carrito.forEach( producto => producto.nombre )
console.log(arreglo1)

// map Crear nuevo arreglo y asignar a nueva variable
const arreglo2 = carrito.map(producto => '${producto.nombre} - ${producto.precio}')
console.log(arreglo2)