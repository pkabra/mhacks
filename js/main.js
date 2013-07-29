var buffercheck;
var videobuffer;
var video = document.getElementById('background-video');
var refreshcount = 0;

function preload(){
	videobuffer = video.buffered.end(0) / video.duration;
	
	percentage = Math.round((videobuffer/0.05)*100)
	
	if(percentage >= 100){
		$('#load-percentage').empty().append('100%');
	}
	else{
		$('#load-percentage').empty().append(percentage+'%');
	}
	
	if(videobuffer > 0.05){
		return true;
	}
	else return false;
}

navigator.sayswho= (function(){
    var N= navigator.appName, ua= navigator.userAgent, tem;
    var M= ua.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);
    if(M && (tem= ua.match(/version\/([\.\d]+)/i))!= null) M[2]= tem[1];
    M= M? [M[1], M[2]]: [N, navigator.appVersion, '-?'];

    return M;
})();

function loadWebsite(){
	//Fix a bug where preloading doesn't work.
	if(navigator.sayswho[0] == "Firefox" || navigator.sayswho[0] == "MSIE"){
		video.play();
	}
	
	buffercheck = setInterval(function(){
		if(video.readyState > 0){
			video.pause();
			if(preload()){
				setTimeout(function(){
					$('#loading').fadeOut(1000);
					$('#navbar').fadeIn(1000);
			$('#mute-button').fadeIn(1000);
					$('#main-content').fadeIn(1000, function(){ video.play(); });
				}, 1500);
				buffercheck=window.clearInterval(buffercheck);
			}
		}
		else if(video.readyState == 0 && video.canPlayType() == "" && refreshcount > 50){
			$('#background-video').remove();
			$('#head').css({height: '600px'});
			if($(window).height() > 650){
				$('#head').css({height: '750px'});
			}
			$('#loading').fadeOut(1000);
			$('#navbar').fadeIn(1000);
			$('#main-content').fadeIn(1000);
			window.clearInterval(buffercheck);
		}
		else refreshcount++;
	}, 200);
}

$(document).ready(function(){
	//Redirect Mobile Users
	if((new RegExp('Mobile')).test(navigator.userAgent)){
		if(screen.width < 1000){
			window.location.href = "mobile.html";
		}
	}
	//Begin Nasty Browser Compatibility stuff
	if(navigator.sayswho[0] == "MSIE" || (video.tagName != "video" && video.tagName != "VIDEO")){
		if(navigator.sayswho[1] < 9 || (video.tagName != "video" && video.tagName != "VIDEO")){
			$('#background-video').remove();
			$('#head').css({height: '600px'});
			if($(window).height() > 650){
				$('#head').css({height: '750px'});
			}
			$('#loading').fadeOut(1000);
			$('#navbar').fadeIn(1000);
			$('#main-content').fadeIn(1000);
		}
		else{
			loadWebsite();
		}
	}
	else {
		loadWebsite();
	}

	$('#navbar').sticky({topSpacing: 0});

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
});

function hideVideo() {
	$('#background-video').animate({opacity: "0"}, 1000);
	$('#location').fadeIn(1500);
	$(".venue-button").text("Now I'm pumped!");
	//Setting timeout because button would cause fast redirect issue
	setTimeout(function(){$('.venue-button').attr('href', 'https://www.facebook.com/events/191595097676108/').attr('target', '_blank');}, 1000);
}

function switchAudio() {
	//if video is muted, unmute and show audo on button and vice versa
	if(video.muted) {
		video.muted = false;
		$('#mute-button').css("background", "url('img/audio-on.png') no-repeat").css('background-size', 'cover');
	}
	else {
		video.muted = true;
		$('#mute-button').css("background", "url('img/audio-mute.png') no-repeat").css('background-size', 'cover');
	}
}
