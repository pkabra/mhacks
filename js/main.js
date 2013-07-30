var buffercheck;
var videobuffer;
var video = document.getElementById('background-video');
var refreshcount = 0;

navigator.sayswho= (function(){
    var N= navigator.appName, ua= navigator.userAgent, tem;
    var M= ua.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);
    if(M && (tem= ua.match(/version\/([\.\d]+)/i))!= null) M[2]= tem[1];
    M= M? [M[1], M[2]]: [N, navigator.appVersion, '-?'];

    return M;
})();

$(document).ready(function(){

	window.addEventListener('focus', function() {
//	    document.title = 'focused';
		//video.play();
//		video.play();
//		video.play();
//		$(video).animate({volume: 1}, 300);
	});

	window.addEventListener('blur', function() {
//	    document.title = 'not focused';
//		$(video).animate({volume: 0}, 300);
//		video.pause();
		mute();
	});

	//Redirect Mobile Users
	if((new RegExp('Mobile')).test(navigator.userAgent)){
		// if(screen.width < 1000){
		// 	window.location.href = "mobile.html";
		// }
		alert('test');
		$('video').remove();
		$('.placeholder-image').show();
//	    $('video img').show();

	}
	//Begin Nasty Browser Compatibility stuff
	if(navigator.sayswho[0] == "MSIE" || (video.tagName != "video" && video.tagName != "VIDEO")){
		if(navigator.sayswho[1] < 9 || (video.tagName != "video" && video.tagName != "VIDEO")){
			ga('send', 'Video', 'Failure', 'IE Load Failure');
			$('#background-video').remove();
			$('#head').css({height: '600px', background: 'url(img/bighouse.jpg) no-repeat'}).css('background-size', 'cover').css('background-position','center');
			if($(window).height() > 650){
				$('#head').css({height: '750px'});
			}
		}
	}

	if(navigator.sayswho[0] == "Firefox" || navigator.sayswho[0] == "MSIE"){
		video.play();
	}

	$('#navbar').sticky({topSpacing: 0});

	$('#navbar ul li a').each(function(index){
		$(this).click(function(){
			ga('send', 'Navbar', 'Click', $(this).attr('href'));
		});
	});

	//Get Sections top position
	function getTargetTop(elem){
		//gets the id of the section header
		//from the navigation's href e.g. ("#html")
		var id = elem.attr("href");
		//Height of the navigation
		var offset = 80;
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
			target -= 200;
		}
		//scrolls to that section.
		$('html, body').animate({scrollTop:target+40}, 800);
		//prevent the browser from jumping down to section.
		event.preventDefault();
	});

	$('.mute').click(function(e){
		switchAudio();
		return false;
	});

	// $('#big-house').hover(function(){
	// 	$('.big-house-bg').addClass('colored');
	// }, function(){
	// 	$('.big-house-bg').removeClass('colored');
	// })
});

function switchAudio() {
	//if video is muted, unmute and show audo on button and vice versa
	if(video.muted) {
		unMute();
	}
	else {
		mute();
	}
}

function unMute(){
	ga('send', 'Audio', 'Unmute');
	video.muted = false;
	$('.mute').text('Mute');	
}

function mute(){
	ga('send', 'Audio', 'Mute');
	video.muted = true;
	$('.mute').text('Unmute');	
}