// Arreglos o Arrays

const numeros = [10,20,30,40,50]
console.table(numeros)

const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'];
console.table(meses)

// Agregar
numeros[5] = 60;
console.log(numeros)

numeros.push(70, 80, 90)
console.log(numeros)

numeros.unshift(-30, -20, -10, 0)
console.log(numeros)

// Eliminar
// console.log(meses)
// meses.pop() // Elimina al final del arreglo
// console.log(meses)
// meses.shift() //Elimina al inicio del arreglo
// console.log(meses)

// Eliminar desde - hasta
// meses.splice(2, 3)
// console.log(meses)

// Rest Operator o Spread operator
const nuevoArrelo = [...meses, 'Junio']
console.log(nuevoArrelo)