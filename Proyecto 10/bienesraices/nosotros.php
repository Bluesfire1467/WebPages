
<?php
require 'includes/funciones.php';
incluirTemplate("header");
?>

<main class="contenedor seccion">
    <h1>Conoce Sobre Nosotros</h1>
    <div class="contenido-nosotros">
        <div class="imagen-nosotros">
            <picture>
                <source srcset="build/img/nosotros.webp" type="img/webp">
                <source srcset="build/img/nosotros.jpg" type="img/jpeg">
                <img src="build/img/nosotros.jpg" alt="Imagen nosotros">
            </picture>
        </div>
        <div class="texto-nosotros">
            <blockquote>
                25 Años de experiencia
            </blockquote>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed consequat sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin eget lectus ullamcorper, posuere augue id, tristique purus. Suspendisse potenti. Integer varius sem rhoncus ornare iaculis. Morbi id pellentesque quam, quis imperdiet dui. Maecenas dignissim nisi vitae malesuada malesuada. Donec vitae ligula vitae lacus dictum tristique. Curabitur non nisl ut libero varius luctus. Maecenas rhoncus at metus non cursus. Aenean eleifend egestas felis, sit amet venenatis libero interdum sit amet. Vestibulum sed egestas dui. Nam dictum rhoncus nibh eget tincidunt. Pellentesque pulvinar feugiat turpis. Fusce varius nunc in ligula pulvinar lobortis.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed consequat sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin eget lectus ullamcorper, posuere augue id, tristique purus. Suspendisse potenti. Integer varius sem rhoncus ornare iaculis. Morbi id pellentesque quam, quis imperdiet dui. Maecenas dignissim nisi vitae malesuada malesuada. Donec vitae ligula vitae lacus dictum tristique. Curabitur non nisl ut libero varius luctus. Maecenas rhoncus at metus non cursus. Aenean eleifend egestas felis, sit amet venenatis libero interdum sit amet. Vestibulum sed egestas dui. Nam dictum rhoncus nibh eget tincidunt. Pellentesque pulvinar feugiat turpis. Fusce varius nunc in ligula pulvinar lobortis.
            </p>
        </div>
    </div>
</main>

<section class="contenedor seccion">
    <h1>Más Sobre Nosotros</h1>

    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>
        <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
            <h3>Precio</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>
        <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
            <h3>Tiempo</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>
    </div>
</section>

<?php
incluirTemplate("footer");
?>