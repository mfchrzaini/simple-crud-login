<?php 
session_start();
 
include 'konek.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$data = mysqli_query($konek,"SELECT * FROM acc WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:../index.php");
}else{
	header("location:../login.php?pesan=gagal");
}
?>