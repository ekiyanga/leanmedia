<?php

require '../connection/connect.php';

if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$SQL = "SELECT * FROM admin WHERE email = '{$email}' AND password = '{$password}'";
	if($result = $db->query($SQL)){
		if($count=$result->num_rows){
			if($count==1){
			echo $count;
			header('Location: account.php');
		}
	}
	}

	
	
}
		

?>

<form action="" method="POST">
	<table>
		<tr>
			<td><input	type="text" name="email" placeholder="Enter Your ID here"</td>
		</tr>
		<tr>
			<td><input	type="text" name="password" placeholder="Enter Your Password here"</td>
		</tr>
		<tr>
			<td><input	type="submit" name="submit" value="login"</td>
		</tr>
	</table>
</form>