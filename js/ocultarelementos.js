// JavaScript Document
    
//para ocultar el planetas,menu,section,nave,aside,velocimetro,sateliterotando,sat con un tiempo determinado-->
    
/*	LA FUNCION OCULTAR OCULTA TANTO PLANETAS,menu,aside,velocimetro,sateliterotando como LAS ESTRELLAS PROGRESIVAMENTE PARA QUE PAREZCA QUE NOS ACERCAMOS A LOS PLANETAS*/
		function ocultar(){
		$("#gatuna").fadeOut(20);
		$("#clicame").fadeOut(20);
		$("#planetarojo").fadeOut(3000);
		$("#planetaverde").fadeOut(3000);
		$("#tellamoasi").fadeOut(2000);
		$('#capa').fadeOut(28500);
		$('#nave').fadeOut(18500);
		$('section').fadeOut(1000);
		$('aside').fadeOut(1800);
		$('velocimetro').fadeOut(500);
		$('#sateliterotando').fadeOut(500);
		$('sat').fadeOut(500);

		}

		
		
			function atraer(){
			$("#instalacionW").css('display','block');
			$("#recursosW").css('display','block');
			$("#problemasW").css('display','block');
			$("#documento").css('display','block');
			$("#jupiter").css('display','none');
			$("#venus").css('display','none');
			$("#planetatierra").css('display','none');
			$("#cohete").css('display','none');
			$("#marte").css('display','none');

			
		}
		function atraervenus(){
				
			$("#instalacionP").css('display','block');
			$("#recursosP").css('display','block');
			$("#problemasP").css('display','block');
			$("#documento").css('display','block');
			$("#jupiter").css('display','none');
			$("#venus").css('display','none');
			$("#planetatierra").css('display','none');
			$("#cohete").css('display','none');
			$("#marte").css('display','none');

			
		}
		function atraermarte(){
				
			
			$("#instalacionO").css('display','block');
			$("#recursosO").css('display','block');
			$("#problemasO").css('display','block');
			
			$("#documento").css('display','block');
			$("#jupiter").css('display','none');
			$("#venus").css('display','none');
			$("#planetatierra").css('display','none');
			$("#cohete").css('display','none');
			$("#marte").css('display','none');
			

			
		}

		function ajustes(){
				
			
			$("#instalacionO").css('display','block');
			$("#recursosO").css('display','block');
			$("#problemasO").css('display','block');
			
			$("#documento").css('display','block');
			$("#jupiter").css('display','none');
			$("#venus").css('display','none');
			$("#planetatierra").css('display','none');
			$("#cohete").css('display','none');
			$("#marte").css('display','none');
			

			
		}
		function volver(){
			$("#documento").css('display','none');
			$("#contenido").css('visibility','hidden');
			$("#jupiter").css('display','block');
			$("#venus").css('display','block');
			$("#planetatierra").css('display','block');
			$("#cohete").css('display','block');
			$("#marte").css('display','block');
			$("#instalacionW").css('display','none');
			$("#recursosW").css('display','none');
			$("#problemasW").css('display','none');
			$("#instalacionP").css('display','none');
			$("#recursosP").css('display','none');
			$("#problemasP").css('display','none');
			$("#instalacionO").css('display','none');
			$("#recursosO").css('display','none');
			$("#problemasO").css('display','none');

			
		
	

		}	
/*que salgan estrellas al clicar en cohete PRUEBO CON ESTO PERO NO ME FUNCIONA ENTONCES solucion: con layer y si funciona */
			function quesalganestrellas(){
				/*$("#tellamoscriptoculto").fadeOut(5000);*/
		}
		
/*	PARA MAS ADELANTE-->
	/*	function mostrar2(){
		$("clicame").click(function(){
			$("nave").fadeIn(13000);
		});
		}*/
			/*function mostrar2(){
			$('#nave').fadeIn(13000);
		}*/
		

	