<?php

$servidor = "localhost";
$nombreusuario = "root";
$password = "";
$db = "todolistdb";

$conexion = new mysqli($servidor,$nombreusuario,$password,$db);

if($conexion->connect_error){
    die("Conexión fallida: ".$conexion->connect_error);
}

$sql = "INSERT INTO todoTable(texto, completado) VALUES('hola', false),
                                                        ('mundo',false)";

if($conexion->query($sql) === true){
    echo "Datos insertado Correctamente";
}else{
    die("Error al insertar datos: ".$conexion->error);
}

mysqli_close($conexion);

?>