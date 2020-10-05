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
            $b = 9;
try {
    echo $c = $a + $b;
} catch (\Throwable $th) {
    echo 'Message: ' .$th->getMessage();
}
            

            if($c==3){
                echo "La suma es : ".$c;
            }else{
                echo "no es el numero";
            }
            

            
            ?>


<a href="<?php echo 'procesar.php?id='.$c; ?>" >enviar</a>


</body>
</html>