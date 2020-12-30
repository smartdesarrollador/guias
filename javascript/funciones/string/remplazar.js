
function remplazar(texto, palabra, remplazar) {
    var txt = texto.replace(palabra, remplazar);
    return txt;
}
console.log(remplazar("Please visit Microsoft!", "Microsoft", "W3Schools"));

        //Resultado: Please visit W3Schools!

/*
        function remplazar() {
            var texto = document.getElementById("texto").value;
            var palabra = document.getElementById("palabra").value;
            var remplazar = document.getElementById("remplazar").value;

            var txt = texto.replace(palabra, remplazar);

            document.getElementById("demo").innerHTML = txt;

        }
        */