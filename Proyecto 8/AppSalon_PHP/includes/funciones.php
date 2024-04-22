<?php

function obtener_servicios() {
    try {
        // Importar credenciales
        require 'database.php';

        // Consulta SQL
        $sql = "SELECT * FROM servicios WHERE id IN(1,2)";

        // Realizar la consulta
        $consulta = mysqli_query($db, $sql);

        return $consulta;

    } catch (\Throwable $th) {
        var_dump($th);
    }
}

obtener_servicios();