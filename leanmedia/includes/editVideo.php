<?php


$query = "SELECT * FROM videos";
if($result = $db->query($query)){
	if($count=$result->num_rows){
		$rows = $result->fetch_all(MYSQLI_ASSOC);
		foreach ($rows as $row) {
			$id = $row['videoID'];
			$name = $row['videoName'];
			echo '<article id="news">';
			echo '<video style="width:100">';
			echo '<source src="videos/vid1.mp4" />';
			echo '</video>';
			echo "<h3><a href='?page=watch&&id=$id'>$name</a></h3>";
			echo '<input type="submit" name="delete" value="Delete">';
			echo '</article>';	
			if(isset($_POST['delete'])){
				$SQL = "DELETE FROM `videos` WHERE `videos`.`videoID` = '{$id}'";
				$result = $db->query($SQL);
			}
		}
	}
}
?>
