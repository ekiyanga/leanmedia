<?php

if (isset($_GET['id'])) {
	$id = $_GET['id'];
    $query = "SELECT * FROM videos WHERE videoID = '{$id}' ";
	if($result = $db->query($query)){
		if($count=$result->num_rows){
			//echo $count;
			$rows = $result->fetch_all(MYSQLI_ASSOC);
			foreach ($rows as $row) {
				$id = $row['videoID'];
				$url = $row['videoURL'];
				$name = $row['videoName'];
				$artist = $row['Artist'];
				$date = $row['dateOfUploading'];
				$videoBio = $row['videoBio'];
				//echo "<a href='watch.php?id=$id'>$name</a>";
			}
		//	echo "<embed src='$url'></embed>";
		}

	}


}
?>
<div id="video-wrapper">
	 <div id="videoPlayerBox">
	 	<video id="nowplaying" autoplay loop poster="images/poster.png">
		 	<source src="<?php echo $url?>"	>
		</video>
		<div id="video_controls_bar">
			<button id="playPauseBtn">Pause</button>
			<input id="seekslider" type="range" min="0" max="100" value="0" step="1">
			<span id="currentTimeText"></span> / <span id="durationTimeText"></span>
			<button id="muteButton">Mute</button>
			<input id="volumeslider" type="range" min="0" max="100" value="40" step="1">
 		<button id="fullScreenButton"></button>
 	</div>
 	<div id="social">
	 	<a href="<?php echo $url?>" download="<?php echo $url?>"><img src="icons/download.jpg">Download</a>
	 </div>
</div>
<div id="aboutVideo">
	<h4>Song: <?php echo $name; ?></h4>
	<h6>Artist: <?php echo $artist; ?></h6>
	<h6>Uploaded: <?php echo $date; ?></h6>
	<p>
	  <?php echo $videoBio;?>
	</p>
</div>
</div>