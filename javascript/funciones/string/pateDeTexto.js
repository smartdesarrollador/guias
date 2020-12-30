function parteDeTexto(texto, inicio, fin) {
    var res = texto.slice(inicio, fin);
    return res;
}
console.log(parteDeTexto("Apple, Banana, Kiwi", 7, 13));

//Resultado: Banana

/*
        function parteDeTexto() {
            var texto = document.getElementById("texto").value;
            var inicio = document.getElementById("inicio").value;
            var fin = document.getElementById("fin").value;

            inicio = parseInt(inicio);
            fin = parseInt(fin);

            var res = texto.slice(inicio, fin);

            document.getElementById("demo").innerHTML = res;

        }
*/