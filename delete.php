<?php 
include 'config.php';
$id = $_GET['id'];
mysqli_query($konek,"DELETE FROM biodata WHERE id='$id'")or die(mysql_error());
 
header("location:index.php?pesan=hapus");
?>