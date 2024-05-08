
<?php
require 'includes/funciones.php';
incluirTemplate("header");
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Guia para la decoracion de tu hogar</h1>

    <picture>
        <source srcset="build/img/destacada2.webp" type="image/webp">
        <source srcset="build/img/destacada2.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen de propiedad">
    </picture>

    <p class="info-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

    <div class="resumen-propiedad">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed consequat sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin eget lectus ullamcorper, posuere augue id, tristique purus. Suspendisse potenti. Integer varius sem rhoncus ornare iaculis. Morbi id pellentesque quam, quis imperdiet dui. Maecenas dignissim nisi vitae malesuada malesuada. Donec vitae ligula vitae lacus dictum tristique. Curabitur non nisl ut libero varius luctus. Maecenas rhoncus at metus non cursus. Aenean eleifend egestas felis, sit amet venenatis libero interdum sit amet. Vestibulum sed egestas dui. Nam dictum rhoncus nibh eget tincidunt. Pellentesque pulvinar feugiat turpis. Fusce varius nunc in ligula pulvinar lobortis.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed consequat sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin eget lectus ullamcorper, posuere augue id, tristique purus. Suspendisse potenti. Integer varius sem rhoncus ornare iaculis. Morbi id pellentesque quam, quis imperdiet dui. Maecenas dignissim nisi vitae malesuada malesuada. Donec vitae ligula vitae lacus dictum tristique. Curabitur non nisl ut libero varius luctus. Maecenas rhoncus at metus non cursus. Aenean eleifend egestas felis, sit amet venenatis libero interdum sit amet. Vestibulum sed egestas dui. Nam dictum rhoncus nibh eget tincidunt. Pellentesque pulvinar feugiat turpis. Fusce varius nunc in ligula pulvinar lobortis.</p>

    </div>
</main>

<?php
incluirTemplate("footer");
?>