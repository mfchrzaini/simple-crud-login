<?php 
include 'config.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];
 
mysqli_query($konek,"INSERT INTO biodata VALUES('','$nama','$alamat','$jurusan')");
 
header("location:index.php?pesan=input");
?>