<?php 
 
include 'config.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];
 
mysqli_query($konek,"UPDATE biodata SET nama='$nama', alamat='$alamat', jurusan='$jurusan' WHERE id='$id'");
 
header("location:index.php?pesan=update");
?>