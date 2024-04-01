// Promise
const usuarioAutenticado = new Promise( (resolve, reject) => {
    const auth = true;

    if (auth) {
        resolve('Usuario Autenticado'); // El promise se cumple
    } else {
        reject('No se puede iniciar sesión'); //El promise no se cumple
    }
});

usuarioAutenticado
    .then( resultado => console.log(resultado) )
    .catch( error => console.log(error) )


// En los Promises existen 3 valores
// Pending : No se ha cumplido pero tampoco se ha rechazado
// fulfilled : Ya se cumplio
// reject : Se ha rechazado o no se pudo cumplir