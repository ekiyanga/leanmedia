<?php
if(isset($_POST['submit'])){
	if(!empty($_POST['email'])&&!empty($_POST['password'])){
		$email=$_POST['email'];
		$password=md5($_POST['password']);

		$SQL = "SELECT * FROM admins WHERE `email` = '{$email}' AND `password` = '{$password}'";
		if($result=$db->query($SQL)){
			if($count=$result->num_rows){
				if($count==1){
					session_start();
					$rows = $result->fetch_all(MYSQLI_ASSOC);
					foreach ($rows as $row) {
						$firstName = $row['firstName'];
						$secondName = $row['secondName'];
						$lastName = $row['lastName'];
					}
					$_SESSION['sess_user']=$firstName." ".$secondName;
					header('Location:?page=account');
				} else 
					echo "sorry";
		
		}
	}
	}	

}

?>
<form action="" method="POST" id="loginform">
	<table>
	<hr>
		<tr>
			<td style="width:30%">Email</td>
			<td style="width:70%"><input type="text" name="email" placeholder="Enter Your Email here" /></td>
		</tr>
		<tr>
			<td style="width:30%">Password</td>
			<td style="width:70%"><input type="password" name="password" placeholder="Enter Your Password Here"/></td>
		</tr>
		<tr>
			<td style="width:70%"></td>
			<td style="float:right"><input type="submit" name="submit" value="Sign In" /></td>
		</tr>
	</table>
</form>