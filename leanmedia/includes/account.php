<?php
session_start();
if(!isset($_SESSION["sess_user"])){
	header("Location: ?page=login");
}
else{
?>
<div class="post">
	<ul>
		<li><a href="?page=uploadVideo">Upload Video</a></li>
		<li><a href="?page=uploadAudio">Upload Music</a></li>
		<li><a href="?page=uploadNews">Upload News</a></li>
<!--		<li><a href="?page=editVideo">Edit Video</a></li>
		<li><a href="?page=uploadNews">Upload News</a></li>
		<li><a href="?page=uploadNews">Upload News</a></li> -->
	</ul>
</div>

<div id="profile">
	Hi <?=$_SESSION['sess_user'];?> !
	<a href="?page=logout">Log0ut</a>
<?php
}
?>
</div>
<p>You have logged in as Administrator</p> 
<p>You Can Choose The category from left-side to upload new audio, video and news.. Enjoy</p>


<!-- hitwebcounter Code START -->
<a href="http://www.hitwebcounter.com" target="_blank">
<img src="http://hitwebcounter.com/counter/counter.php?page=6526640&style=0006&nbdigits=5&type=page&initCount=0" title="" Alt=""   border="0" >
</a>                                        <br/>
                                        <!-- hitwebcounter.com --><a href="http://www.hitwebcounter.com" title="Live Stats For Website" 
                                        target="_blank" style="font-family: Geneva, Arial, Helvetica, sans-serif; 
                                        font-size: 10px; color: #908C86; text-decoration: underline ;"><em>Live Stats For Website                                        </em>
                                        </a>   
                            