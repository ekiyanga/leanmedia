<?php 
$SQL = "SELECT * FROM news";
if($result=$db->query($SQL)){
	if($count=$result->num_rows){
		$rows=$result->fetch_all(MYSQLI_ASSOC);
		foreach($rows as $row){
			$id=$row['newsID'];
			$heading=$row['heading'];
			$news=$row['post'];
			$imageURL=$row['newsURL'];
			
			echo '<div id="articlewrapper">';
			echo '<article id="news">';
			echo "<a href='?page=read&&id=$id'>";
			echo '<img src="'.$imageURL.'">';
			echo '<h3>'.$heading.'</h3>';
			echo "<p>Read More</a></p>";
			echo "</a>";
			echo '</article>';
			echo '</div>';
		}
	}
}

?>