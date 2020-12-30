function concatenar(texto1, texto2) {
    var texto3 = texto1.concat(" ", texto2);
    return texto3;
}
console.log(concatenar("Hello", "World!"));

//Resultado: Hello World!

/*
      function concatenar() {
          var texto1 = document.getElementById("texto1").value;
          var texto2 = document.getElementById("texto2").value;

          var texto3 = texto1.concat(" ", texto2);

          document.getElementById("demo").innerHTML = texto3;

      }
*/