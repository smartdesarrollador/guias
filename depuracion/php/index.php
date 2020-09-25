<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Document</title>
</head>
<body>
    <h1>Depuracion Php</h1>

    <?php $a = 1;
            $b = 2;

            $c = $a + $b;

            echo "La suma es : ".$c;

            
            ?>


<a href="<?php echo 'procesar.php?id='.$c; ?>" >enviar</a>


</body>
</html>