<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Reto wiki 2">
    <meta name="keywords" content="HTML,CSS, JS, PROXMOX, UBUNTU, APACHE, wordpress,prestashop,owncloud">
    <meta name="author" content="Anne Sierra, Jose Ranero, Jenire Perez, Álvaro Saiz">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap CSS -->
<!--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/estilo.css">

	<title>Reto Wiki 2</title>
    
<!-- Bootstrap JQUERY -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"			       crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/audios.js"></script>
    <script type="text/javascript" src="jquery.js"></script>
<!--Código y funciones en SCRIPTS con los efectos cohetes,nave,planetas,astronauta,nav... para que estén ordenados.
 Si meteis, ordenar y comprobar que funciona y no haya conflicto entre ellos, agregar si mola, pero sin fastidiar el resto de scripts-->
    <script type="text/javascript" src="js/cohetepersigue.js"></script>
    <script type="text/javascript" src="js/cohete_nave.js"></script>
    <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/acercateplanetas.js"></script>
    <script type="text/javascript" src="js/ocultarelementos.js"></script>
    <script type="text/javascript" src="js/mostrarastronauta.js"></script>
    <script type="text/javascript" src="js/hoveropcion.js"></script>
    <script type="text/javascript" src="js/documentosplanetas.js"></script>
	<script src="js/particles.min.js"></script>
    <script src="js/particulas.js"></script>

</head>

<body>
        
<!--Este DIV Se displaya cuando se HAGA CLIC EN EL COHETE y salen las estrellas-->
    <div id="capa" style="display:none;">
    <!--(el velocimetro de la nave que es una imagen gif)-->
    <img id="velocimetro" src="img/logos/velocimetro4.gif">
    <!--Este script se situa aqui para que salgan ESTRELLAS al clicar en cohete y genere el movimiento-->
    <script type="text/javascript" src="js/estrellasmostrar.js"></script>
    </div>
<!--Que se diplaye una imagen de un cohete pequeño cuando clic en mismo cohete grande -->
    <img id="cohete" style="visibility:hidden;"  src="img/logos/coheteultimo.png" width="320" height="241" />
    <img class="temblor2" id="nave" style="visibility:hidden"  src="img/logos/cabina4.jpg" width="70%">
<!--Este DIV produce TEMBLOR (con hover) EN PLANETAS Y COHETE
Y esta asociado a una funcion llamada, mostrarastronauta que he hecho para que cuando tiemble el planeta vuele el astronauta-->
    <div class="temblor" id="planetarojo">
    <img onClick="mostrarastronauta()" src="img/logos/planetarojo.png">
    <img id="modificado">
      <div id="axis2" class="two">
            <img id="gatuna" onClick="play2()" class="object van move-left" src="img/logos/gata.png"/>
      </div>
    </div>
<!--El ASTROUNAUTA estará CERCA DEL SATELITE Y cuando CLIC en PLANETA ROJO tiemble Y se DESVANEZCA y que VUELE DESPUES el astronauta por el espacio-->
<!--ESTE FLOTARA CERCA DEL SATELITE-->
   <div id="astronauta">
  	 <img src="img/logos/astronauta-05.gif">
   </div>
<!--gif de un platillo volante-->
    <div id="ufo">
    	<img id="modificado" class="platillo" src="img/logos/ufotrans.gif">
    </div>
<!-- Planetas imagenes-->
    <div id="planetaverde"><img src="img/logos/planetaverde9.png"></div>
  <!--  <div id="marte"><img src="img/logos/marte.png"></div>
    <div id="venus"><img src="img/logos/venus2.png"></div>-->
    
    <!--EMPIEZA EL DOCU DE WORDPRESS-->
    <div include-html="documentos.html"></div>

<!-- El planeta tierra  al resto tiene atracción es independiente (ahora hemos cambiado el funcionamiento con la introduccion de janire y no es necesario que el planeta tierra se acerque de forma independiente y tampoco que haga hover, para evitar conflictos con lo que ha hecho janire de (clic en planetas y muestre la documentacion, menu, sonido al pasar el raton por los enlaces) -->
    <div class="contenedor1">
<!-- La función atraer muestra los menus al clicar en los planetas que ha hecho janire-->

      <div id="planetatierra" onClick="atraer()"><img class="mundi" src="img/logos/planetatierra5.png"></div>
        <div id="venus" onClick="atraervenus()" ><img src="img/logos/venus2.png"></div>
        <div id="marte" onClick="atraermarte()" ><img  src="img/logos/marte.png"></div>

    </div> 
<!-- DIV PARTICLES -->
    <div id="particles-js"></div>
<!--COHETE PARA QUE PAREZCA QUE NAVEGAMOS-->
<!-- que muestre LAS ESTRELLAS AL CLICAR EN EL COHETE y generar movimiento-->
<!-- le pongo mostrar el elemento cohete pequeño con mostrar (this) , class="temblor LE AGREGO EL TEMBLOR AL COHETE incluyendo id temblor,
 para que tiemble el cohete al ponerse encima, tambien que suene el audio y que suene el motor,muestre layer-->
	<div id="axis2" onClick="ocultar()" class="ten"><img id="clicame" onClick="play();mostrarastronauta();show('capa');mostrar(this); return false;mostrar2();" class="temblor object boomerang multiple"  src="img/logos/coheteultimo.png"></div>
<!-- Satelites rotando y sonidos al clicar en ellos-->  
    <div id="sateliterotando"><img id="astronauta" src="img/logos/astronauta-05.gif"><img id="sat" src="img/logos/Satelite-Rotando.gif" onClick="play3()"></div>
    <div id="sateliterotando2"><img src="img/logos/SateliteAnimada.gif" onClick="play3()"></div>
        
<!--NAVEGADOR-->
    <header>
<!-- El nav con un id para que desaparezca progresivamente con fadeout cuando clic en cohete, con el nombre id tellamoasi-->
        <nav id="tellamoasi">
            <a href="?aside=0&section=0"><div class="hover" class="col-10 col-sm-10 col-md-10"><img src="img/logos/proxmoxlogoaCOLOR.png" > <img class="color" src="img/logos/proxmoxlogoa.png" ></div></a> 
            <a href="?section=2"><div class="hover" class="col-10 col-sm-10 col-md-10"><img src="img/logos/ubuntulogoaCOLOR.png"><img class="color"src="img/logos/ubuntulogoa.png"></div></a></div> 
            <a href="?section=3"><div class="hover" class="col-10 col-sm-10 col-md-10"><img src="img/logos/xampplogoacolor.png"><img class="color"src="img/logos/xamplogoablanco.png"></div></a>
            <a href="?aside=1&section=4"><div class="hover" class="col-10 col-sm-10 col-md-10"><img src="img/logos/gitlogoablancoCOLOR.png"><img class="color"src="img/logos/gitlogoablanco.png"></div></a>
            <a href="?aside=2&section=6"><div class="hover" class="col-10 col-sm-10 col-md-10"><img id="tuerca" src="img/logos/ajusteslogo.png" ></div></a></div> 
        </nav>
    </header>
 
<!-- Aside-->
    <div id="aside"></div>
<!-- Section-->
    <div id="section"></div>

<script type="text/javascript" src="js/aside.js"></script>	


<!-- Script astronauta extras-->
<script type="text/javascript" src="js/ajustes.js"></script>



<!-- Recuadro de enlaces  -->
<!-- se intentará sacarlo fuera del index al igual que el contenido que se genere  -->
<div id="balloon">
    <a href="ajustes/gitv2.html" >GITHUB</a>
    <a href="ajustes/problemasv2.html" >PROBLEMAS</a>
</div>


<!-- Contenido Extra-->

<!-- Imagen astronauta para contenido extra-->
<img src="img/logos/astronauta.png" id="astroajustes" onClick="ajustesastro()">

<!-- Footer-->
<footer>   
<!--Aqui el audio que inicia con la pagina para que suene audio espacial, he convertido a tres formatos y reducido tamaño, ocupan menos que antes-->
    <audio id="audio" autoplay loop>
    
  	   <source src="audios/espacio.wav" type="audio/wav">
		 <source src="audios/espacio.mp3" type="audio/mp3"> 
          <source src="audios/espacio.ogg" type="audio/ogg"> 
    
	</audio>
  	<small>
        &copy; Copyright 2018. Creado por Anne Sierra, Jose Ranero, Janire Perez y Álvaro Saiz. 
        <!--Se muestra la version del GITHUB-->
         
        
            
        <?php
$directorio = ".git/refs/tags"; //ruta actual
$ficheros  = scandir($directorio, 1);
$version=array_values($ficheros)[0];
print_r( "Version: " .$version);
?>


    </small>    
</footer>
</body>
</html>