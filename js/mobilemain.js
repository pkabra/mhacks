$(document).ready(function(){
	//Get Sections top position
	function getTargetTop(elem){
		//gets the id of the section header
		//from the navigation's href e.g. ("#html")
		var id = elem.attr("href");
		//Height of the navigation
		var offset = 60;
		//Gets the distance from the top and 
		//subtracts the height of the nav.
		return $(id).offset().top - offset;
	}
	//Smooth scroll when user click link that starts with #
	$('a[href^="#"]').click(function(event) {
		//gets the distance from the top of the 
		//section refenced in the href.
		var target = getTargetTop($(this));
		if($(this).attr('href') == '#what') {
			target -= 100;
		}
		//scrolls to that section.
		$('html, body').animate({scrollTop:target+40}, 800);
		//prevent the browser from jumping down to section.
		event.preventDefault();
	});
});
