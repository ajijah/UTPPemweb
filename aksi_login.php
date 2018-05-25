<?php
	session_start();
	include 'config.php';
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$query=mysqli_query($host, "SELECT * FROM user where username='$username' and password='$password'");
	$x=mysqli_num_rows ($query);
	
	if ($x==true){
		$_SESSION['username']=$username;
		header("location: indexel.html");
	}
	
	else{
		echo "<script>alert('username atau password salah');location='login.html';</script>";
	}

?>
