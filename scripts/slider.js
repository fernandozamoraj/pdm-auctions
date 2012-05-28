$(function() {

	var imgc = $('#slide img').length-1;
	var counter = 2;
	var color = ['#7F8084', '#7F8084', '#7F8084', '#757575'];
	
	$('#slide').cycle({
		fx: 'fade',
		before: function(currHTML, nextHTML, options) {
			if(counter === 2) {
				options.currSlide = imgc;
				counter--;
			} else if (counter === 1) {
				options.currSlide = 0;
				counter--;
			}
			
			$('#container').animate({ backgroundColor: color[options.currSlide] }, 1000);
		}
	});
});
