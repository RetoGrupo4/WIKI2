<?php
$directorio = ".git/refs/tags"; //ruta actual
$ficheros  = scandir($directorio, 1);
$version=array_values($ficheros)[0];
//print_r("Version: " .$version);

?>

<script>
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

    
    //script de texto aleatorio
var indice = 0;
 
    frases = new Array();
    frases[0] = "<p>Hola</p>";
    frases[1] = "<p>Necesitas Ayuda</p>";
    frases[2] = <?php echo json_encode("<p>Version:  $version</p>");?>;
    
    indice = Math.random()*(frases.length);
    indice = Math.floor(indice);
    
    function rotar() {


    if (indice == frases.length) {indice = 0;}
    document.getElementById("rotando").innerHTML = frases[indice];
    indice++;
    setTimeout("rotar();",3500);
    }



//script de contenido github y problemas de wiki 2
    $(document).ready(function()
{
$("#gitv2").click(function(){
        $.get("./contenido/ajustes/gitv2.html", function(htmlexterno){
   $("#extra").html(htmlexterno);
    	});
});

$("#problemasv2").click(function(){
        $.get("./contenido/ajustes/problemasv2.html", function(htmlexterno){
   $("#extra").html(htmlexterno);
    	});
});



});


</script>


