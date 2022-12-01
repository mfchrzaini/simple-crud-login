<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Mahasiswa</title>
</head>
<body>
	<div class="judul">		
		<h1>Edit Data</h1>
	</div>
	<a href="index.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Edit data</h3>
 
	<?php 
	include "config.php";
	$id = $_GET['id'];
	$query_mysql = mysqli_query($konek,"SELECT * FROM biodata WHERE id='$id'")or die(mysql_error());
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>					
			</tr>	
			<tr>
				<td>Jurusan</td>
				<td><input type="text" name="jurusan" value="<?php echo $data['jurusan'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Save"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>