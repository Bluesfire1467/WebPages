
<?php
    require 'includes/funciones.php';
    incluirTemplate("header");
?>

<main class="contenedor seccion">
    <h2>Casa y Depas en venta</h2>

    <?php
        $limite = 12;
        include 'includes/templates/anuncios.php';
    ?>
</main>

<?php
incluirTemplate("footer");
?>