function concatenar(arreglo1, arreglo2) {

    var arreglo = arreglo1.concat(arreglo2);
    return arreglo;
}

var arreglo1 = ["Cecilie", "Lone"];
var arreglo2 = ["Emil", "Tobias", "Linus"];
console.log(concatenar(arreglo1, arreglo2));

          //Resultado: ["Cecilie", "Lone", "Emil", "Tobias", "Linus"]