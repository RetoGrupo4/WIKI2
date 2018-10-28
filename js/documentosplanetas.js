function instalacion() {
    document.getElementById("contenido").style.visibility = 'visible';
    document.getElementById("instalacion").style.display = 'block';
    document.getElementById("recursos").style.display = 'none';
    document.getElementById("problemas").style.display = 'none';


}


function recursos() {
    document.getElementById("contenido").style.visibility = 'visible';
    document.getElementById("recursos").style.display = 'block'
    document.getElementById("instalacion").style.display = 'none';
    document.getElementById("problemas").style.display = 'none';
}


function problemas() {
    document.getElementById("contenido").style.visibility = 'visible';
    document.getElementById("problemas").style.display = 'block';
    document.getElementById("instalacion").style.display = 'none';
    document.getElementById("recursos").style.display = 'none';
}


function sonido() {
    var audio = document.getElementById("music"); audio.play();

}

