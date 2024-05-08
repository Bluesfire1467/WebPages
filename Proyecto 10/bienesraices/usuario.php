<?php
//Importar conexion
include 'includes/config/database.php';
$db = conectarDB();
// Crear email y password
$email = "correo@correo.com";
$password = "123456";

// Hashear Password
$passwordHash = password_hash($password, PASSWORD_BCRYPT);

// Query para isertar
$query = "INSERT INTO usuarios (email, password) VALUES ('${email}', '${passwordHash}')";
mysqli_query($db, $query);

?>