<?php

    if (!isset($_SESSION)) {
        session_start();
    }

    $auth = $_SESSION['login'] ?? false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienes Raíces</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>
<header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
    <div class="contenedor contenido-header">
        <div class="barra">
            <a href="index.php">
                <img loading="lazy" src="/build/img/logo.svg" alt="Icono index">
            </a>

            <div class="mobile-menu">
                <img loading="lazy" src="/build/img/barras.svg" alt="Icono menu">
            </div>

            <div class="derecha">
                <img class="dark-mode-boton" loading="lazy" src="/build/img/dark-mode.svg">
                <nav class="navegacion">
                    <a href="nosotros.php">Nosotros</a>
                    <a href="anuncios.php">Anuncios</a>
                    <a href="blog.php">Blog</a>
                    <a href="contacto.php">Contacto</a>
                    <?php if ($auth === true): ?>
                        <a href="cerrar-sesion.php">Cerrar Sesión</a>
                    <?php endif; ?>
                </nav>
            </div>

        </div> <!-- .barra -->
        <?php
            if ($inicio) {
                ?> <h1>Venta de casa y departamentos exclusivos de lujo</h1> <?php
            }
        ?>

    </div>
</header>