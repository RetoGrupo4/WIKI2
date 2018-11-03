//Script para mostrar los enlaces
function ajustesastro() {
    var layer1,  mostrar;
    layer1 = document.getElementById("balloon");
    if(layer1.style.visibility == "hidden") {
    layer1.style.visibility = "visible";
    mostrar = document.getElementById("astroajustes").childNodes[0];
    
    }
    else {
    layer1.style.visibility = "hidden";
    mostrar = document.getElementById("astroajustes").childNodes[0];
    
    }
    
    }




    var indice = 0;
    
    frases = new Array();
    frases[0] = "Hola";
    frases[1] = "Necesitas Ayuda";
    frases[2] = 'Version ' .$version;

    indice = Math.random()*(frases.length);
    indice = Math.floor(indice);
    
    function rotar() {


    if (indice == frases.length) {indice = 0;}
    document.getElementById("rotando").innerHTML = frases[indice];
    indice++;
    setTimeout("rotar();",3500);
    }

