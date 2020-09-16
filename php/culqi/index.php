<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <title>Document</title>

    
    <script src="https://checkout.culqi.com/js/v3"></script>

</head>
<body>
    <h1>Ejemplo culqi</h1>

<input type="button" id="buyButton" value="comprar" data-producto="1" >

    <script src="../../bower_components/jquery/dist/jquery.js"></script>
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script>
  Culqi.publicKey = 'pk_test_3169cbe8e334748a';

  Culqi.settings({
    title: 'Culqi Store',
    currency: 'PEN',
    description: 'Polo/remera Culqi lover',
    amount: 3500
  });

  $('#buyButton').on('click', function(e) {
    // Abre el formulario con la configuración en Culqi.settings
    Culqi.open();
    e.preventDefault();
 });

 function culqi() {
  if (Culqi.token) { // ¡Objeto Token creado exitosamente!
      var token = Culqi.token.id;
      alert('Se ha creado un token:' + token);
      //En esta linea de codigo debemos enviar el "Culqi.token.id"
      //hacia tu servidor con Ajax
  } else { // ¡Hubo algún problema!
      // Mostramos JSON de objeto error en consola
      console.log(Culqi.error);
      alert(Culqi.error.user_message);
  }
};
</script>
</body>
</html>