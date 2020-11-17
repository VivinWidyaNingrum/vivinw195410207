<?php
	include 'login.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(!empty($_POST['username']) || empty($_POST['password'])){
		$sql = mysqli_query($connect, "SELECT*FROM user WHERE username = '$username' AND password = '$password'");
		$result = mysqli_num_rows($sql);
		if($result){
			header("Location: input.php");
		}else{
			echo "Username dan Password Salah";
		}
	}
?>