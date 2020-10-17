$(document).ready(function(){

  //obtener
  var obtener_texto = $("#titulo").text();

  //colocar
  var colocar_texto = $("#contenedor").text("Hello world!");

  //Agregar al final
  $("#contenedor").append(" <b>Appended text</b>.");

  //Ocultar Elemento
  $("p").hide();

  //Eliminar
  $("#enlace").remove();

  //Añadir Clase
  $("#titulo").addClass("titulo");

  //Añadir estilo
  $("#lista").css("background-color", "yellow");

  //Obtener estilo
  var obtener_estilo = $("#titulo").css("color");

  //Evento Click
  $("#boton").click(function(){
    //$("p").show();
    alert(obtener_estilo);
  });

  
  

});
