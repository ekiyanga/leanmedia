<?php

if (isset($_GET['id'])) {
	$id = $_GET['id'];
    $query = "SELECT * FROM news WHERE newsID = '{$id}' ";
	if($result = $db->query($query)){
		if($count=$result->num_rows){
			$rows = $result->fetch_all(MYSQLI_ASSOC);
			foreach ($rows as $row) {
				$id = $row['newsID'];
				$url = $row['newsURL'];
				$heading = $row['heading'];
				$news = $row['post'];
				$date = $row['newsDate'];
			}
		}

	}


}
?>
<article id="read">
	<img src=" <?php echo $url; ?>" />
	<h1> <?php echo $heading; ?></h1>
	<p>
		 <?php echo $news; ?>
	</p>
	<h4>Posted on: <?php echo $date; ?></h4>
</article>