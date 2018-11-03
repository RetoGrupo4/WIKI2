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
		$("#astroajustes").fadeIn(20000);
		$("#aleatorio").fadeIn(20000);
	
		}

	//codigo introducido por janire que falta por comentar
		
		function atraer(){
			$("#menu").css('display','block');	
			$("#queesW").css('display','block');	
			$("#queesP").css('display','none');	
			$("#queesO").css('display','none');	
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
		$("#menu").css('display','block');	
			
		$("#queesW").css('display','none');	
		$("#queesO").css('display','none');	
		$("#queesP").css('display','block');	
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
		$("#menu").css('display','block');	
		$("#queesW").css('display','none');	
		$("#queesP").css('display','none');	
		
		$("#queesO").css('display','block');	
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
		$("#menu").css('display','none');	
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
		$("#queesW").css('display','none');
		$("#queesP").css('display','none');
		$("#queesO").css('display','none');

		
	}
	function letras(){
		$("#menu").css('display','none');	
		$("#queesW").css('display','none');	
		$("#queesP").css('display','none');	
		
		$("#queesO").css('display','none');	
		$("#instalacionO").css('display','none');
		$("#recursosO").css('display','none');
		$("#problemasO").css('display','none');
		
		$("#documento").css('display','none');
		$("#jupiter").css('display','none');
		$("#venus").css('display','none');
		$("#planetatierra").css('display','none');
		$("#cohete").css('display','none');
		$("#marte").css('display','none');
		$("#letrasfinal").css('display','block');
		

		
	}

	function volverwiki2(){
		$("#menu").css('display','none');	
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
		$("#queesW").css('display','none');
		$("#queesP").css('display','none');
		$("#queesO").css('display','none');
		$("#letrasfinal").css('display','none');

		
	}


