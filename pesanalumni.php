<?php
	include "koneksi.php";

	if(isset($_POST['simpan'])){
		$posted = $_POST['tanggal'];
		$nama = $_POST['name'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$tahun = $_POST['thn'];
		$kerja = $_POST['kerja'];
		$pesan = $_POST['msg'];

		$sql = mysqli_query($conn,"INSERT INTO pesanalumni (`Posted`,`Name`,`Email`,`Address`,`TahunLulus`,`Pekerjaan`,`Message`)
		VALUES ('$posted','$nama','$email','$address','$tahun','$kerja','$pesan')");

		mysqli_query($conn, $sql);

		header("Location:cetakPesan.php");

	}else{

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Kesan & Pesan Alumni</title>
	<link rel="stylesheet" href="style.css">		
</head>
<center><body>
	<h1>Form Kesan & Pesan Alumni</h1>
	<form  method="post">		
		<table>
            <tr>
				<td><input type="hidden" name="tanggal"placeholder="Posted" value="<?php echo date("Y-m-d"); ?>"></td>
			</tr>
            <tr>
				<td><input type="text" name="name"placeholder="Name"></td>
			</tr>
            <tr>
				<td><input type="email" name="email"placeholder="Email"></td>
			</tr>
            <tr>
				<td><input type="text" name="address"placeholder="Address"></td>
			</tr>
			<tr>
				<td><input type="text" name="thn"placeholder="Tahun Lulus"></td>
			</tr>
			<tr>
				<td><input type="text" name="kerja"placeholder="Pekerjaan"></td>
			</tr>
            <tr>
				<td><textarea name="msg" id="" cols="25" rows="3" placeholder="Pesan"></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
			</tr>
		</table>
	</form>
	<br><a href="home.php">Beranda</a>
</body></center>
</html>