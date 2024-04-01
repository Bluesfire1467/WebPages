// Metodos de propiedad
const reproductor = {
    reproducir : function(id){
        console.log(`Reproduciendo cancion ${id}`)
    },
    pausar : function () {
        console.log("Pausando")
    },
    crearPlaylist : function (nombre) {
        console.log(`Creando la playlist ${nombre}`)
    },
    reproducirPlaylist : function (nombre = "Rock") {
        console.log(`Reproduciendo la playlist ${nombre}`)
    }
}

reproductor.borrarCancion = function (id){
    console.log(`Eliminando la cancion ${id}`)
}

reproductor.reproducir(100)
reproductor.pausar()
reproductor.borrarCancion(10)
reproductor.crearPlaylist("Metal")
reproductor.reproducirPlaylist("Metal")