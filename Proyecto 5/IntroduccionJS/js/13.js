const producto = {
    nombreProducto : "Monitor 20 Pulgadas",
    precio : 300,
    disponible : true
}

const medidas = {
    peso : '1kg',
    medida: '1m'
}

// Unir objetos | Rest Operator

const nuevoProducto = { ...producto, ...medidas }

console.log(producto)
console.log(nuevoProducto)