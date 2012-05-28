$(function() {
	
	var	xwidth = ($('.image-popout img').width())/2;
	var	xheight = ($('.image-popout img').height())/2;
	
    if(xwidth < 150)
       xwidth = 150;
    
    if(xheight < 200)
       xheight = 200;
    
	$('.image-popout img').css(
			{'width': xwidth, 'height': xheight}
	); //By default set the width and height of the image.
	
	$('.image-popout img').parent().css(
			{'width': xwidth, 'height': xheight}
	);
	
	$('.image-popout img').hover(
		function() {
			$(this).stop().animate( {
				width   : xwidth * 2,
				height  : xheight * 2,
				margin : -(xwidth/2)
				}, 200
			); //END FUNCTION
			
			$(this).addClass('image-popout-shadow');
			
		}, //END HOVER IN
		function() {
			$(this).stop().animate( {
				width   : xwidth,
				height  : xheight,
				margin : 0
				}, 200, function() {
					$(this).removeClass('image-popout-shadow');
		}); //END FUNCTION
			
		}
	);
});