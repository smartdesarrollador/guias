<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<meta name="author" content="">

	<title>Untitled 5</title>
	<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		
$('#enviar').click(function(){
	var valor1=$('input[name=gerente]:checked').val();
	var valor2=$('input[name=subgerente]:checked').val();
	
	alert(valor1+valor2)
     

	
	
}
);


});//fin de document 
</script>
</head>

<body>
<?php




?>
<form action="formulario_jquery3.php" method="POST" >
<table>
<tr>
	<td>genero:</td>
	<td><input type="checkbox" value="gerente" name="gerente" id="gerente"/>gerente</td>
	<td><input type="checkbox" value="subgerente" name="subgerente" id="subgerente" />subgerente</td>
	
</tr>
<tr>
	<td colspan="2"><input type="submit" value="enviar" id="enviar"/></td>
	
</tr>
</table>
</form>
</body>
</html>