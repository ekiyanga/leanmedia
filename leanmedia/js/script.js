var vid,playPauseBtn,seekslider,currentTimeText,durationTimeText,muteButton,volumeslider,fullScreenButton;
	function initializePlayer(){
		vid = document.getElementById("nowplaying");
		playPauseBtn = document.getElementById("playPauseBtn");
		seekslider = document.getElementById("seekslider");
		currentTimeText=document.getElementById("currentTimeText");
		durationTimeText=document.getElementById("durationTimeText");
		muteButton=document.getElementById("muteButton");
		volumeslider = document.getElementById("volumeslider");
		fullScreenButton = document.getElementById("fullScreenButton");

		playPauseBtn.addEventListener("click",playPause,false);
		seekslider.addEventListener("change",vidseek,false);
		vid.addEventListener("timeupdate",seektimeupdate,false);
		muteButton.addEventListener("click",vidMute,false);
		volumeslider.addEventListener("change",setVolume,false);
		fullScreenButton.addEventListener("click",toggleFullScreen,false);
	}
	window.onload = initializePlayer;
	function playPause(){
		if(vid.paused){
			vid.play();
			playPauseBtn.innerHTML = "Pause";
		}else{
			vid.pause();	
			playPauseBtn.innerHTML = "Play";
		}
	}
	function vidseek(){
		var seekto = vid.duration * (seekslider.value / 100);
		vid.currentTime=seekto;
	}
	function seektimeupdate(){
		var newtime=vid.currentTime*(100/vid.duration);
		seekslider.value=newtime;
		var currentMinutes=Math.floor(vid.currentTime/60);
		var currentSecond=Math.floor(vid.currentTime-currentMinutes*60);
		var durationMinutes=Math.floor(vid.duration/60);
		var durationSecond=Math.floor(vid.duration-durationMinutes*60);
		if(currentSecond<10){
			currentSecond="0"+currentSecond;
		}
		if(durationSecond<10){
			durationSecond="0"+durationSecond;
		}
		currentTimeText.innerHTML=currentMinutes+":"+currentSecond;
		durationTimeText.innerHTML=durationMinutes+":"+durationSecond;
	}
	function vidMute(){
		if(vid.muted){
			vid.muted=false;
			muteButton.innerHTML = "Mute";
		}else{
			vid.muted=true;	
			muteButton.innerHTML = "Unmute";
		}
	}
	function setVolume(){
		vid.volume = volumeslider.value/100;
	}
	function toggleFullScreen(){
		if(vid.requestFullScreen){
			vid.requestFullScreen();
		} else if(vid.mozRequestFullScreen){
			vid.mozRequestFullScreen();
		} else if(vid.webkitRequestFullScreen){
			vid.webkitRequestFullScreen();
		}
	}