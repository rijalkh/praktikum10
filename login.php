<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="style.css">	
</head>
<body>
	<?php
		session_start();
		include "koneksi.php";

		if (isset($_SESSION['username'])) {
			header("Location: home.php");
		}

		if (isset($_POST['login'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
		
			$sql = "SELECT * FROM alumni WHERE Username='$username' AND Password='$password'";
			$result = mysqli_query($conn, $sql);
			if ($result->num_rows > 0) {
				$row = mysqli_fetch_assoc($result);
				$_SESSION['username'] = $row['username'];
				$_SESSION['username'] = $username;
				header("Location: home.php");
			} else {
				echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
			}
		}

	?>

	<h1>LOGIN</h1>
	<center><form action="" method="post">		
		<table>
			<tr>
				<td><input type="text" name="username" placeholder="Username"></td>
			</tr>
			<tr>
				<td><input type="password" name="password" placeholder="Password"></td>
			</tr>
			<tr>
				<td><input type="submit" name="login" value="Log In" class="tombol"></td>
			</tr>
		</table>
	</form>
	<br><a href="signup.php">Daftar</a></center>
</body>
</html>