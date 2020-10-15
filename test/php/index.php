<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$basededatos = "prueba";

$conexion = mysqli_connect($servidor, $usuario, $password, $basededatos) or die("No se pudo conectar con el servidor");

//$db = mysqli_select_db($conexion, $basededatos) or die("No se pudo conectar con la base de datos");



echo "<br>";

function listar($conexion){

    $consulta = "SELECT * FROM datos";

    $resultado = mysqli_query($conexion, $consulta) or die("Algo salio mal");

    //return $numero_filas = $resultado->num_rows;

    //return $numero_columnas = $resultado->field_count;

    while($row = mysqli_fetch_array($resultado)){
        $lista[] = $row;
    };
    return $lista;
};

$rows = listar($conexion);
var_dump($rows);

exit();

foreach($rows as $l){
    echo $l["texto"]."<br>";
}







mysqli_close($conexion);



?>