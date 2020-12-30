
function paddingInicio(texto, cantidad, caracter) {
    str = texto.padStart(cantidad, caracter);
    return str;
}
console.log(paddingInicio("hola", 10, 0));

        //Resultado: 000000hola

/*
        function paddingInicio() {
            var texto = document.getElementById("texto").value;
            var cantidad = document.getElementById("cantidad").value;
            var caracter = document.getElementById("caracter").value;

            var cantidad = parseInt(cantidad);

            str = texto.padStart(cantidad, caracter);

            document.getElementById("demo").innerHTML = str;

        }
        */
