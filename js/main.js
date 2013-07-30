var buffercheck;
var videobuffer;
var video = document.getElementById('background-video');
var refreshcount = 0;


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

	$('#big-house').hover(function(){
		$('.big-house-bg').addClass('colored');
	}, function(){
		$('.big-house-bg').removeClass('colored');
	})
	// $('.big-house').hover(function(){
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