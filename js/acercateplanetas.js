// JavaScript Document
$(document).ready(function(){

	$("#clicame").click(function(){
		$("#marte").animate({width:"19%"},14000);
	});
	$("#clicame").click(function(){
		$("#venus").animate({width:"4%"},18000);
	});
	$("#clicame").click(function(){
		$("#jupiter").animate({width:"45%"},28000);
	});
	$("#clicame").click(function(){
		$("#planetatierra").animate({width:"20%"},18000);
	});
		$("#clicame").click(function(){
		$("#sateliterotando2").animate({width:"3%"},20000);
	});
	//con esto el audio inicia a un volumen del 60% para que no suene tan alto, se regula y no pisa a otros audios
	var vid = document.getElementById("audio");
	vid.volume = 0.6; 
	
});