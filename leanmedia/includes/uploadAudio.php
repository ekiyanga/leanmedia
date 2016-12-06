<?php
if(isset($_POST['submitAudio'])){
	$name = $_FILES['file']['name'];
	$temp = $_FILES['file']['tmp_name'];
	$artist = $_POST['artist'];
	move_uploaded_file($temp, "audios/".$name);
	$url = "http://lean93media.000webhostapp.com/audios/$name";
	$SQL = "INSERT INTO `audios` VALUES ('','{$artist}', '{$name}', '{$url}', NOW())";
	$result = $db->query($SQL);
}
?>
<form action="" method="POST" enctype="multipart/form-data">
	<input type="text" name="artist" id="title" placeholder="Name of Artist/Band" required><br>
	<input type="file" name="file" required>
	<textarea name="audioBio" placeholder="Important Details About The Audio, Making, Production, Copyrights" required></textarea><br>
	<input type="submit" name="submitAudio" value="Upload Audio">
</form>
