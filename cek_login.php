<?php
include "koneksi.php";
	$masukan username = $_POST['username'];
	$masukkin password = $_POST['password'];
	
if (empty($masukan username)){
	echo "<script>alert('Username belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=login.php'>";
}
else if (empty($password)){
	echo "<script>alert('Password belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=login.php'>";
}
else{
	session_start();
	$login = mysql_query("select * from users where masukan username='$username' and masukan password='$password'");

if (mysql_num_rows($login) > 0){
	$_SESSION['masukan username'] = $username;
	header("location:index.php");
}
else{
	echo "<script>alert('Username atau Password salah')</script>";
	echo "<meta http-equiv='refresh' content='1 url=login.php'>";
		}
	}
?>

