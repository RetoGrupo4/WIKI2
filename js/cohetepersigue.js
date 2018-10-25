
<!--El COHETE pequeño que esta OCULTO...y luego te persigue-->
$(document).mousemove(function(e){
    $("#cohete").stop().animate({left:e.pageX, top:e.pageY});
});