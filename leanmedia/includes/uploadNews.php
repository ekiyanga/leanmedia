<?php
if(isset($_POST['postNews'])){
	$heading = $_POST['heading'];
	$news = $_POST['news'];
	$name = $_FILES['file']['name'];
	$temp = $_FILES['file']['tmp_name'];
	move_uploaded_file($temp, "newsImages/".$name);
	$url = "http://lean93media.000webhostapp.com/newsImages/$name";
	$SQL = "INSERT INTO `news` VALUES ('', '{$heading}', '{$news}', '{$url}', NOW())";
	$result = $db->query($SQL);

	echo "$heading Was Uploaded Successiful";
}
?>
<form action="" method="POST" enctype="multipart/form-data">
	<input type="file" name="file" required="required">
	<input type="text" name="heading" size="53" id="title" placeholder="The Heading of The News" required="required"><br>
	<textarea name="news" placeholder="Enter Your Story Here" required="required">		
	</textarea><br>
	<input type="submit" name="postNews" value="Post">
</form>