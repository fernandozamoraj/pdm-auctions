
$(document).ready(function(){
	
	initWidth = $(".top-menu-item").width();
	
	$(".top-menu-item").hover(function() {
		
		//get the title inside <a>
		description = $(this).children("a").attr("title");
		
		//start the animation
		$(this).stop().animate({width: "220"}, {queue:false, duration:"fast"});
		
		//remove previously <p>
		$(this).children("p").remove();
		
		//create <p> and attach title into it
		$(this).find("a").after("<p>"+description+"<p>");
		
		// create animation to make it looks good
		$(this).children("p").stop().animate({ opacity: "show" }, {queue:false, duration:"fast"});
		
		// hover out
		}, function(){
		
			// animate it to the basic width
			$(this).stop().animate({width: initWidth },{queue:false, duration:"fast"});
			
			// fade out animation
			$(this).children("p").stop().animate({ opacity: "0" }, {queue:false, duration:"fast"});
		});	
		
		$('#home').click(function(){
			window.location = '/index';
		});

        $('#about').click(function(){
            window.location = '/About';
        });
        
	$('#products').click(function(){
            window.location = '/products';
        });
	$('#gallery').click(function(){
            window.location = '/gallery';
        });
        
        $('#contact-us').click(function(){
           window.location = '/ContactUs'; 
        });
});