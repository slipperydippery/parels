var video = videojs('intro-video');
var overlay = document.getElementById('videooverlay');

overlay.onclick = function(){
	togglePause();
};
// videojs.options.children.loadingSpinner = false;


 function togglePause(){
  if (video.paused()) {
    video.play();
  }
  else {
    video.pause();
  }
}

// video.on('ended', function() {
// 	video.currentTime(23);
// 	video.play();
// });

// video.LoadingSpinner(false);
// video.loop(true);
video.on('timeupdate', function () {
	if ( this.currentTime() >= 32) {
		video.currentTime(21);
	}
	if ( this.currentTime() >= 15 ){
		document.getElementById("videooverlay").style.display = "block";
		// overlay.style.display = "block";
	};
});



// video.ready(function() {
// 	setTimeout(() => {
// 		this.play();
// 	}, 3000);
// });