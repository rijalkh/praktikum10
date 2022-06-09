<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" href="style.css">		
</head>
<body>

<?php
	include "koneksi.php";
	
	if(isset($_POST['simpan'])){
		$nama = $_POST['name'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$Angkatan = $_POST['angkatan'];
		$Jurusan = $_POST['jurusan'];
		$username = $_POST['user'];
		$password = $_POST['password'];

		$sql = mysqli_query($conn,"INSERT INTO alumni (Nama,Address,Email,Angkatan,Jurusan,Username,Password)
		values ('$nama','$address','$email','$Angkatan','$Jurusan','$username','$password')");

		mysqli_query($conn, $sql);

		header("Location:login.php");

	}else{
	}
?>

	<h1>SIGN UP</h1>
	<center>
	<form action="" method="post">		
		<table>
            <tr>
				<td><input type="text" name="name" placeholder="Name"></td>
			</tr>
			<tr>
				<td><input type="text" name="address" placeholder="Address"></td>
			</tr>
            <tr>
				<td><input type="email" name="email" placeholder="Email"></td>
			</tr>
			<tr>
				<td><input type="text" name="angkatan" placeholder="Angkatan"></td>
			</tr>
			<tr>
				<td><input type="text" name="jurusan" placeholder="Jurusan"></td>
			</tr>
            <tr>
				<td><input type="text" name="user" placeholder="Username"></td>
			</tr>
			<tr>
				<td><input type="password" name="password" placeholder="Password"></td>
			</tr>
			<tr>
				<td><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
			</tr>
		</table>
	</form>
	<br><a href="login.php">Kembali</a></center>
</body>
</html>