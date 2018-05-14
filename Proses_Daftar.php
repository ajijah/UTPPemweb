<?php
include "koneksi.php";

$masukan username = $_POST['username'];
$masukan password = $_POST['password'];
 
	if(empty($masukan username)){
		echo "<script>alert('Username belum diisi')</script>";
		echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
	}
	else 

	if (empty($password)){
		echo "<script>alert('Password belum diisi')</script>";
		echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
	}
	else{
		$daftar = mysql_query("INSERT INTO users (masukan username, masukan password) values (masukan username, masukan password)('$masukan username','masukan $password')");
	
	if ($daftar){
		echo "<script>alert('Berhasil Mendaftar')</script>";
		echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
	}
	else{
		echo "<script>alert('Gagal Mendaftar')</script>";
		echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
		}
	}
?>
