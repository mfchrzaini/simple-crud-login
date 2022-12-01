<?php 
include 'konek.php';
$username = $_POST['username'];
$Password = $_POST['Password'];
 
mysqli_query($konek,"INSERT INTO acc VALUES('','$username','$Password')");
 
header("location:../login.php?pesan=Berhasil");
?>