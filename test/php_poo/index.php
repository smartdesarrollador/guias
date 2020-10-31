<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

require_once("persona.php");
require_once("estudiante.php");

$nombre = new Persona("Pedro");
$estudiante = new Estudiante("Jorge","005");


echo $estudiante->getDataStudent();
echo "<br>";
echo $nombre->getName();

?>
    
</body>
</html>