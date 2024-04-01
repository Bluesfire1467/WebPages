// This

const reservacion = {
    nombre : "Rey",
    apellido : "Quintero",
    total: 4000,
    pagado : false,
    informacion : function () {
        console.log(`El cliente ${this.nombre} ${this.apellido} reservó y su cantidad a pagar es ${this.total}`)
    }
}
const reservacion2 = {
    nombre : "Juan",
    apellido : "Pineda",
    total: 5000,
    pagado : false,
    informacion : function () {
        console.log(`El cliente ${this.nombre} ${this.apellido} reservó y su cantidad a pagar es ${this.total}`)
    }
}
console.log( reservacion2.informacion() )
console.log( reservacion.informacion() )