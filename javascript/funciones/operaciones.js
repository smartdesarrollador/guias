/*crear inputs con ids a y b y 
button para llamar la funcion suma()*/
function suma() {
    var a = document.getElementById("a").value;
    var b = document.getElementById("b").value;
    a = parseInt(a);
    b = parseInt(b);

    var sumar = (a + b);

    document.getElementById("c").innerHTML = sumar;
}