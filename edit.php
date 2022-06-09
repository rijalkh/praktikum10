<?php
	include 'koneksi.php';

	$id = $_GET['id'];

	$query  = mysqli_query($conn, "select * from pesanalumni where id='$id'");
	$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Form Edit Data Alumni</title>
		<link rel="stylesheet" href="style.css">
    </head>
    <body><center>
		<h1>Form Edit Data Alumni</h1>
        <form method="post" action="update.php">
            <input type="hidden" value="<?php echo $row['id'];?>" name="id">
            <input type="hidden" value="<?php echo $row['Posted'];?>" name="tanggal">
            <table>
                <tr><td><input value="<?php echo $row['Name'];?>" type="text" name="nama"></td></tr>

				<tr><td><input value="<?php echo $row['Email'];?>" type="text" name="email"></td></tr>
                
				<tr><td><input value="<?php echo $row['Address'];?>" type="text" name="address"></td></tr>

				<tr><td><input value="<?php echo $row['TahunLulus'];?>" type="text" name="thn"></td></tr>

				<tr><td><input value="<?php echo $row['Pekerjaan'];?>" type="text" name="kerja"></td></tr>

				<tr><td><input value="<?php echo $row['Message'];?>" type="text" name="msg"></td></tr>

                <tr><td colspan="2"><button type="submit" value="simpan" class="tombol">Update Data</button></td></tr>
            </table>
			<br><a href="cetakPesan.php">Kembali</a>
			</center>
        </form>
    </body>
</html>