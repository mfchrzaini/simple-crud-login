<!DOCTYPE html>
<html>
<head>
	<title>Input Data Mahasiswa</title>
</head>
<body>
	<div class="judul">		
		<h1>CRUD Sederhana</h1>
	</div>
	
	<br/>
 
	<a href="index.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Input data baru</h3>
	<form action="inputAksi.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>					
			</tr>	
			<tr>
				<td>Jurusan</td>
				<td><input type="text" name="jurusan"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Save"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>