
<!--El COHETE pequeño que esta OCULTO...y luego te persigue-->
$(document).mousemove(function(e){
    $("#cohete").stop().animate({left:e.pageX, top:e.pageY});
});
<!--Despues de clic en cohete desparece el scroll-->
		function desaparecescroll() {
  		  document.getElementById("scroll").style.overflow = "hidden";
}