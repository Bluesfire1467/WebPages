<?php
require '../../includes/funciones.php';
$auth = estaAutenticado();

if (!$auth) {
    header("Location: /");
}


// Validar id
$id = $_GET["id"];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header("Location: /admin");
}

// Base de datos
require '../../includes/config/database.php';
$db = conectarDB();

// Consultar datos
$consulta = "SELECT * FROM `propiedades` WHERE `id` = ${id}";
$resultado = mysqli_query($db, $consulta);
$propiedad = mysqli_fetch_assoc($resultado);
//echo "<pre>";
//var_dump($propiedad);
//echo "</pre>";


// Consultar vendedores
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);


incluirTemplate("header");

// Arreglo con mensajes de errores
$errores = [];

$titulo = $propiedad["titulo"];
$precio = $propiedad["precio"];
$descripcion = $propiedad["descripcion"];
$habitaciones = $propiedad["habitaciones"];
$wc = $propiedad["wc"];
$estacionamiento = $propiedad["estacionamiento"];
$vendendorId = $propiedad["vendedores_id"];
$imagenPropiedad = $propiedad["imagen"];

// Ejecutar el codigo despues de que el usuario envia el formulario
if ($_SERVER['REQUEST_METHOD'] === "POST") {

//        echo '<pre>';
//        var_dump($_POST);
//        echo '</pre>';

//
//        echo '<pre>';
//        var_dump($_FILES);
//        echo '</pre>';


    $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
    $precio = mysqli_real_escape_string($db, $_POST['precio']);
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
    $wc = mysqli_real_escape_string($db, $_POST['wc']);
    $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
    $vendendorId = mysqli_real_escape_string($db, $_POST['vendedor']);
    $creado = date('Y-m-d');

    // Asignar files a una variable
    $imagen = $_FILES['imagen'];

//        var_dump($imagen['name']);


    if (!$titulo) {
        $errores[] = "Debes añadir un titulo";
    }
    if (!$precio) {
        $errores[] = "El precio es obligatorio";
    }
    if (strlen($descripcion) < 50) {
        $errores[] = "La descripcion es obligatoria y debe ser mayor a 50 caracteres";
    }
    if (!$habitaciones) {
        $errores[] = "El numero de habitaciones es obligatorio";
    }
    if (!$wc) {
        $errores[] = "El numero de baños es obligatorio";
    }
    if (!$estacionamiento) {
        $errores[] = "El numero de estacionamiento es obligatorio";
    }
    if (!$vendendorId) {
        $errores[] = "Debes ingresar un vendedor";
    }
    // No es obligatoria la imagen
    // Validar tamaño 1M max
    $medida = 1000 * 1000;
    if ($imagen['size'] > $medida) {
        $errores[] = "La imagen es muy pesada";
    }


    // Revisar que el arreglo de errores esta vacio
    if (empty($errores)) {

        $carpetaImagenes = '../../imagenes';
        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }

        $nombreImagen = '';

        // Subida de archivos
        if ($imagen['name']) {
            // So hay nueva imagen
            unlink($carpetaImagenes . "/" . $propiedad['imagen']);
            // Generar nombre unico
            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
            // Subir la imagen
            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . "/" . $nombreImagen);
        } else {
            $nombreImagen = $propiedad['imagen'];
        }




        // Insertar en BD
        $query = "UPDATE propiedades SET titulo = '${titulo}', precio = '${precio}', imagen = '${nombreImagen}', descripcion = '${descripcion}', habitaciones = ${habitaciones}, wc =${wc}, estacionamiento = ${estacionamiento}, vendedores_id = ${vendendorId} WHERE id = ${id}";

        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            // Redireccionar al usuario con querystring ?
            header("Location: /admin?resultado=2");
        }
    }
}
?>

    <main class="contenedor seccion">
        <h1>Actualizar propiedad</h1>

        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php foreach ($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>


        <form class="formulario" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Informacion General</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo propiedad"
                       value="<?php echo $titulo ?>">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio propiedad"
                       value="<?php echo $precio ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

                <img src="/imagenes/<?php echo $propiedad['imagen'] ?>" class="imagen-small">

                <label for="descripcion">Descripcion</label>
                <textarea id="descripcion" name="descripcion"><?php echo $descripcion ?></textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9"
                       value="<?php echo $habitaciones ?>">

                <label for="wc">Baños:</label>
                <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc ?>">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9"
                       value="<?php echo $estacionamiento ?>">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>
                <select name="vendedor" id="vendedor" name="vendedor">
                    <option value="">-- Seleccione --</option>
                    <?php while ($row = mysqli_fetch_assoc($resultado)): ?>
                        <option <?php echo $vendendorId === $row['id'] ? 'selected' : ''; ?>
                                value="<?php echo $row['id'] ?>"><?php echo $row['nombre'] . " " . $row['apellido'] ?></option>
                    <?php endwhile; ?>
                </select>
            </fieldset>

            <input type="submit" value="Actualizar propiedad" class="boton boton-verde">
        </form>
    </main>

<?php
incluirTemplate("footer");
?>