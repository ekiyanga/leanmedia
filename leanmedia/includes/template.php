<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
		$filename = "includes/".$page.'.php';

		if(file_exists($filename)){
			$content = $filename;
		} else {
			$content = 'includes/home.php';
		}
	}else{
		$content ='includes/home.php';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="icons/icon2.png">
	<title>Lean Media</title>
	<link rel="stylesheet" type="text/css" href="styles/reset.css" />
	<link rel="stylesheet" type="text/css" href="styles/main.css" />
	<script src="js/script.js">
	</script>
</head>
<body>
	<header>
		<div id="logo"></div>
		<nav id="nav-menu">
			<a href="#" id="menu-icon"></a>
			<ul>
				<li><a href="?page=home">Home</a></li>
				<li><a href="?page=news">News</a></li>
	<!--			<li><a href="?page=charts">Charts</a></li>  -->
				<li><a href="?page=videos">Videos</a></li>
				<li><a href="?page=audios">Audios</a></li>
				<li><a href="?page=login">Login</a></li>
			</ul>
		</nav>
	</header>

	<div id="wrapper">
	
	<?php
		require $content;
	?>	
	</div>
	<div class="clear"></div>
	<footer>
		<section>
			<p><b>Author: Erick Lean<br>
			+255 679 381 299
		</section>
		<section>
			&copy 2016 Copyright 
		</section>
		<section>
			<ul>
				<li><a target="_blank" href="https://www.facebook.com/erick.lean.9"><img src="icons/facebook.png"></a></li>
				<li><a target="_blank" href="https://www.instagram.com/ericklean123/"><img src="icons/instagram.png"></a></li>
			</ul>
		</section>
	</footer>
</body>
</html>