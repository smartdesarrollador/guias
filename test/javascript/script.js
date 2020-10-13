//variables

var global = "";
let restringido = "";
const constante = "";

var a = 1;
var b = 3;
var suma = a + b;

var estado = true;

//Obtener contenido
var texto_titulo = document.getElementById("titulo").innerHTML;

var parrafo = document.getElementsByTagName("p");
var texto_parrafo = parrafo[0].innerHTML;

//funcion
function alerta(){
    alert(texto_parrafo);
};

//condicion
function condicion(estado){

if(estado == true){
   return "correcto";
}else{
    return "incorrecto";
};

}

//bucle
function bucle(){
var i;
for (i = 0; i < cars.length; i++) {
  text += cars[i] + "<br>";
}
}



//switch
function casos(){
switch (new Date().getDay()) {
    case 0:
      day = "Sunday";
      break;
    case 1:
      day = "Monday";
      break;
    case 2:
       day = "Tuesday";
      break;
    case 3:
      day = "Wednesday";
      break;
    case 4:
      day = "Thursday";
      break;
    case 5:
      day = "Friday";
      break;
    case 6:
      day = "Saturday";
  }
}

