<?php
//require '../connection/connect.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];
    $query = "SELECT * FROM videos WHERE videoID = '{$id}' ";
	if($result = $db->query($query)){
		if($count=$result->num_rows){
			echo $count;
			$rows = $result->fetch_all(MYSQLI_ASSOC);
			foreach ($rows as $row) {
				$id = $row['videoID'];
				$url = $row['videoURL'];
				$name = $row['videoName'];
				echo "<a href='watch.php?id=$id'>$name</a>";
			}
			echo "<embed src='$url'></embed>";
		}

	}


}




?>