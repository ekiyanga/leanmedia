<?php 
if(isset($_POST['submitVideo'])){
	$artist=$_POST['artist'];
	$videoBio=$_POST['videoBio'];
	$name = $_FILES['file']['name'];
	$temp = $_FILES['file']['tmp_name'];
	move_uploaded_file($temp, "videos/".$name);
	$url = "http://lean93media.000webhostapp.com/videos/$name";
	$SQL = "INSERT INTO `videos` VALUES ('', '{$name}', '{$artist}','{$url}','{$videoBio}',NOW())";
	$result = $db->query($SQL);
}
?>
<form action="" method="POST" enctype="multipart/form-data" id="upload">
	<input type="text" name="artist" id="title" placeholder="Name of Artist/Band" required><br>
    <input type="file" name="file" required>
	<textarea name="videoBio" placeholder="Important Details About The Audio, Making, Production, Copyrights" required></textarea><br>
	<input type="submit" name="submitVideo" value="Upload video">
</form>