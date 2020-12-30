
function obtenerCaracter(texto, indice) {

    str = texto.charAt(indice);
    return str;
}
console.log(obtenerCaracter("hola", 1));

        //Resultado: hola000000

/*
        function obtenerCaracter() {
            var texto = document.getElementById("texto").value;
            var indice = document.getElementById("indice").value;


            var indice = parseInt(indice);

            str = texto.charAt(indice);
            document.getElementById("demo").innerHTML = str;

        }
        */