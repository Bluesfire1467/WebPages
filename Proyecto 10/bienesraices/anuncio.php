
<?php
require 'includes/funciones.php';
incluirTemplate("header");

// Conectamos a base de datos
require 'includes/config/database.php';
$db = conectarDB();

// Obtener id
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header("Location: /");
}

// Consultamos id en BD
$query = "SELECT * FROM propiedades WHERE id = $id";
$resultado = mysqli_query($db, $query);

// Validamos que ese id exista
if (!$resultado -> num_rows) {
    header("Location: /");
}

$anuncio = mysqli_fetch_assoc($resultado);
?>

<main class="contenedor seccion contenido-centrado">
    <h1><?php echo $anuncio['titulo'] ?></h1>

    <img loading="lazy" src="imagenes/<?php echo $anuncio['imagen'] ?>" alt="Imagen de propiedad">

    <div class="resumen-propiedad">
        <p class="precio">$<?php echo $anuncio['precio'] ?></p>
        <ul class="iconos-caracteristicas">
            <li>
                <img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                <p><?php echo $anuncio['wc'] ?></p>
            </li>
            <li>
                <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                <p><?php echo $anuncio['estacionamiento'] ?></p>
            </li>
            <li>
                <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                <p><?php echo $anuncio['habitaciones'] ?></p>
            </li>
        </ul>
        <p><?php echo $anuncio['descripcion'] ?></p>

    </div>
</main>

<?php
mysqli_close($db);
incluirTemplate("footer");
?>