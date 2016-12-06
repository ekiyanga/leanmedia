<?php

$query = "SELECT * FROM audios";
if($result = $db->query($query)){
	if($count=$result->num_rows){
		//echo 'About '.$count.' Uploads';
		$rows = $result->fetch_all(MYSQLI_ASSOC);
		foreach ($rows as $row) {
			$id = $row['audioID'];
			$name = $row['audioName'];
			echo '<article id="video">';
			echo "<a href='?page=listen&&id=$id'>";
			echo '<video id="audio">';
			echo '<video>';
			echo "<h3>$name</a></h3>";
			echo "</a>";
			echo '</article>';	
		}
	}
}


?>
