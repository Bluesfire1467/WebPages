<?php
require '../../includes/funciones.php';
$auth = estaAutenticado();

if (!$auth) {
    header("Location: /");
}
// Base de datos
require '../../includes/config/database.php';
$db = conectarDB();

// Consultar vendedores
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);

incluirTemplate("header");

// Arreglo con mensajes de errores
$errores = [];

$titulo = '';
$precio = '';
$descripcion = '';
$habitaciones = '';
$wc = '';
$estacionamiento = '';
$vendendorId = '';

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
    if (strlen($descripcion) < 30) {
        $errores[] = "La descripcion es obligatoria y debe ser mayor a 30 caracteres";
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

    // Validacion para que agreguen una imagen
    if (!$imagen['name'] || $imagen['error']) {
        $errores[] = "La imagen es obligatorio";
    }
    // Validar tamaño 1M max
    $medida = 1000 * 1000;
    if ($imagen['size'] > $medida) {
        $errores[] = "La imagen es muy pesada";
    }


    // Revisar que el arreglo de errores esta vacio
    if (empty($errores)) {

        // Subida de archivos

        // Crear carpeta
        $carpetaImagenes = '../../imagenes';

        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }
        // Generar nombre unico
        $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

        // var_dump($imagen);

        // Subir la imagen
        move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . "/" . $nombreImagen);

        // Insertar en BD
        $query = "INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, creado, vendedores_id) VALUES ('$titulo', '$precio', '$nombreImagen', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendendorId')";

        // echo $query;
        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            // Redireccionar al usuario con querystring ?
            header("Location: /admin?resultado=1");
        }
    }
}
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php foreach ($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>


        <form class="formulario" method="post" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
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

            <input type="submit" value="Crear propiedad" class="boton boton-verde">
        </form>
    </main>

<?php
incluirTemplate("footer");
?>