// JavaScript Document
// CON ESTa FUNCION AL HACER CLIC (EN PLANETA ROJO) QUE EL ASTRONAUTA DEL SATELITE  Y AGITARSE SE SUELTE Y VUELE POR EL ESPACIO ID modificado
//Y TAMBIEN PARA QUE DESAPAREZA SU GEMELO ID ASTROUNAUTA
		function mostrarastronauta(){
			var contenedor=document.getElementById("modificado");
			var xx = parent.location.href;
			var xx = xx.toUpperCase();
			if (xx.indexOf('INDEX.ASP')!=-1){
			/*contenedor.src="img/logos/astronauta-05.gif"*/
			contenedor.src="img/logos/ufotrans.gif"
			}else{
			/*contenedor.src="img/logos/astronauta-05.gif"*/
			contenedor.src="img/logos/astronauta-05.gif"
			}
			$("#astronauta").fadeOut(2000);
			/*$("#sat").fadeOut(2000);*/
		}