<?php

$query = "SELECT * FROM videos";
if($result = $db->query($query)){
	if($count=$result->num_rows){
		//echo 'About '.$count.' Uploads';
		$rows = $result->fetch_all(MYSQLI_ASSOC);
		foreach ($rows as $row) {
			$id = $row['videoID'];
			$name = $row['videoName'];
			echo '<article id="video">';
			echo "<a href='?page=watch&&id=$id'>";
			echo '<video id="video">';
			echo '</video>';
			echo "<h3>$name</h3>";
			echo "</a>";
			echo '</article>';	
		}
	}
}


?>
