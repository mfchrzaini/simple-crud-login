<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<h2>Forum Login</h2>
	<br/>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman tersebut";
		}else if ($_GET['pesan'] == "Berhasil") {
			echo "Akun Berhasil Di Buat";
		}
	}
	?>
	<br/>
	<br/>
	<form method="post" action="cekLogin.php">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="LOGIN"></td>	
			</tr>
		</table>
		<h4>Belum punya akun?</h4><a class="addAkun" href="addAkun.php">Buat Akun</a>				
	</form>
</body>
</html>