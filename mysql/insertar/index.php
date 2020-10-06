<?php

$servidor = "localhost";
$nombreusuario = "root";
$password = "";
$db = "prueba";

$conexion = new mysqli($servidor, $nombreusuario, $password, $db);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$sql = "INSERT INTO datos(texto, numero,estado) VALUES('hola',1, false),
                                                        ('mundo',4,true)";

if ($conexion->query($sql) === true) {
    echo "Datos insertado Correctamente";
} else {
    die("Error al insertar datos: " . $conexion->error);
}

mysqli_close($conexion);
