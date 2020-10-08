<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$basededatos = "prueba";

$conexion = mysqli_connect($servidor, $usuario, $password, $basededatos) or die("No se pudo conectar con el servidor");

//$db = mysqli_select_db($conexion, $basededatos) or die("No se pudo conectar con la base de datos");

$consulta = "SELECT * FROM datos";

$resultado = mysqli_query($conexion, $consulta) or die("Algo salio mal");

while($row = mysqli_fetch_array($resultado)){
    echo $row['texto']."<br>";
}

mysqli_close($conexion);



?>