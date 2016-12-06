<?php

if (isset($_GET['id'])) {
	$id = $_GET['id'];
    $query = "SELECT * FROM audios WHERE audioID = '{$id}' ";
	if($result = $db->query($query)){
		if($count=$result->num_rows){
			//echo $count;
			$rows = $result->fetch_all(MYSQLI_ASSOC);
			foreach ($rows as $row) {
				$id = $row['audioID'];
				$url = $row['audioURL'];
				$name = $row['audioName'];
				$artist = $row['artist'];
				$date = $row['date'];
			}
		}

	}


}
?>
<div style="background:url(icons/audio1.jpg) no-repeat center;width:80%;min-height:400px;margin:10px;">
	<audio loop autoplay>
		<source src="<?php echo $url?>"	>
	</audio>
	<div id="aboutVideo">
		<h4>Song: <?php echo $name; ?></h4>
		<h6>Artist: <?php echo $artist; ?></h6>
		<h6>Uploaded: <?php echo $date; ?></h6>
		<p>
		  Enjoy The Song
		</p>
	</div>
</div>
<div id="social">
 	<a href="<?php echo $url?>" download="<?php echo $url?>"><img src="icons/download.jpg">Download</a>
 </div>
