<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../login.php?pesan=belum_login");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
	<div class="judul">		
		<h1>CRUD Sederhana</h1>
	</div>
 
	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	</br>
	<a class="tombol" href="input.php">Tambah Data Baru</a>
 
	<h3>Data user</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jurusan</th>
			<th>Opsi</th>		
		</tr>
		<?php 
		include "config.php";
		$query_mysql = mysqli_query($konek,"SELECT * FROM biodata")or die(mysql_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td><?php echo $data['jurusan']; ?></td>
			<td>
				<a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit |</a> 
				<a class="hapus" href="delete.php?id=<?php echo $data['id']; ?>">Delete</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
	</br>
	<a href="logout.php">LOGOUT</a>
</body>
</html>