<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>My Home Page</title>
</head>

<?php
    session_start();
	include "koneksi.php";
    $date=date('l, d M');

?>

<center><body>
<div>
    <?php echo "<h2>Selamat Datang " . $_SESSION['username'] ."! pada ". $date. "</h2>"; ?>
    
    <ul class="list">
        <li><a href="pesanalumni.php">Input Kesan Pesan</a></li>
        <li><a href="cetakPesan.php">Lihat Kesan Pesan</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</div>
</body></center>
</html>