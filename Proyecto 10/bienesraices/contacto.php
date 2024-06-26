
<?php
    require 'includes/funciones.php';
    incluirTemplate("header");
?>

<main class="contenedor seccion">
    <h1>Contacto</h1>

    <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp">
        <source srcset="build/img/destacada3.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada3.jpg" alt="Contacto">
    </picture>

    <h2>Llene el formulario de Contacto</h2>

    <form class="formulario">
        <fieldset>
            <legend>Informacion Personal</legend>

            <label for="nombre">Nombre</label>
            <input type="text" placeholder="Tu nombre" id="nombre">

            <label for="email">Correo</label>
            <input type="email" placeholder="Tu correo" id="email">

            <label for="telefono">Telefono</label>
            <input type="tel" placeholder="Tu telefono" id="telefono">

            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje"></textarea>
        </fieldset>
        <fieldset>
            <legend>Informacion sobre la Propiedad</legend>
            <label for="opciones">Vende o Compra</label>

            <select name="" id="opciones">
                <option value="" disabled selected> -- Seleccione --</option>
                <option value="compra">Compra</option>
                <option value="vende">Vende</option>
            </select>

            <label for="presupuesto">Precio o Presupuesto</label>
            <input type="number" placeholder="Tu precio o presupuesto" id="presupuesto">
        </fieldset>
        <fieldset>
            <legend>Información sobre la propiedad</legend>
            <p>Como desea ser contactado</p>

            <div class="forma-contacto">
                <label for="contactar-telefono">Télefono</label>
                <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

                <label for="contactar-email">Email</label>
                <input name="contacto" type="radio" value="email" id="contactar-email">
            </div>

            <p>Si eligió teléfono, elija la fecha y la hora</p>

            <label for="fecha">Fecha</label>
            <input type="date" id="fecha">

            <label for="hora">Hora</label>
            <input type="time" id="hora" min="09:00" max="18:00">
        </fieldset>

        <input type="submit" value="Enviar" class="boton-verde">
    </form>
</main>

<?php
incluirTemplate("footer");
?>