<?php

$servidor = "localhost";
$nombreusuario = "root";
$password = "";
$db = "prueba";

$conexion = new mysqli($servidor, $nombreusuario, $password, $db);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$sql = "CREATE TABLE datos(
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    texto VARCHAR(100) NOT NULL,
    numero INT(11) NULL,
    estado BOOLEAN NOT NULL,
    timestamp TIMESTAMP
    )";

if ($conexion->query($sql) === true) {
    echo "La tabla se creó correctamente...";
} else {
    die("Error al crear tabla: " . $conexion->error);
}
