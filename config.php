<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "data";

	$konek = mysqli_connect($server,$username,$password);
	if($konek){
		$pilih = mysqli_select_db($konek,$database);
	}else{
		echo mysqli_error();
	}
?>