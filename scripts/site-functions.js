function beefyRollover(elementName){
	$("#" + elementName).mouseover(function(){
		$(this).toggleClass(elementName + "-hover");
	}).mouseout(function(){
		$(this).toggleClass(elementName + "-hover");
	});
}

function setupSocialMediaIcon(elementName, url){
	beefyRollover(elementName);
	
	$("#" + elementName).click(function(){
		window.location = url;
	});
}				

