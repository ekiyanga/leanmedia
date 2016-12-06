<?php

require '../connection/connect.php';
$query = "SELECT * FROM videos";
if($result = $db->query($query)){
	if($count=$result->num_rows){
		echo $count;
		$rows = $result->fetch_all(MYSQLI_ASSOC);
		foreach ($rows as $row) {
			$id = $row['videoID'];
			$name = $row['videoName'];
			echo "<a href='../includes/watch.php?id=$id'>$name</a>";
		}
	}
}

?>