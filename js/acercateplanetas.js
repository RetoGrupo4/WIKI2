

/* function myFunction(x) {
    if (x.matches) { // If media query matches
       
    } else {
       
    }
}

var x = window.matchMedia("(max-width: 767px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes */

if ($(window).width() > 660) {
	$(document).ready(function(){
	$("#clicame").click(function(){
		$("#marte").animate({width:"19%"},14000);
		$("#venus").animate({width:"4%"},18000);
		$("#planetatierra").animate({width:"20%"},18000);
		$("#sateliterotando2").animate({width:"3%"},20000);
		
	});

	var vid = document.getElementById("audio");
	vid.volume = 0.6; 
})

} else {
	$(document).ready(function(){
	$("#clicame").click(function(){
		$("#marte").animate({width:"140%"},14000);
		$("#venus").animate({width:"56%"},18000);
		$("#planetatierra").animate({width:"200%"},18000);
		$("#sateliterotando2").animate({width:"120%"},20000);
		
	});

	//con esto el audio inicia a un volumen del 60% para que no suene tan alto, se regula y no pisa a otros audios
	var vid = document.getElementById("audio");
	vid.volume = 0.6; 
})
}
