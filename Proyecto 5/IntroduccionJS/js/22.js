const efectivo = 1000;
const carrito = 1000

// if( efectivo >= carrito ){
//     console.log("El usuario puede pagar")
// } else {
//     console.log("Fondos insuficientes")
// }

const rol = 'Admin'

if (rol === 'Admin'){
    console.log("Acceso a todo el sistema")
} else if (rol === 'Editor'){
    console.log("Eres editor, peudes entrar")
} else {
    console.log("No puedes entrar")
}