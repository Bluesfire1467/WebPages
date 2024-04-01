// Arreglos o Arrays

const numeros = [10,20,30,40,50]
console.table(numeros)

const meses = ['Enero', 'Febrero', 'Marzo'];
console.table(meses)

console.log(numeros[0], meses[2])

console.log("Meses")
meses.forEach( function (mes){
    console.log(mes)
} )