<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table{
            font-size: 14px;
            font-weight: normal;
        }
    </style>
<body>
    <center><h1>Kesan dan Pesan Alumni</h1></center>
    <table width='100%' cellpadding='2' cellspacing='2' border='1'>
        <tr>
        <th>No</th>
        <th>Id</th>
        <th>Posted</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Tahun Lulus</th>
        <th>Pekerjaan</th>
        <th>Pesan</th>
        <th>Ket.</th>
        </tr>

        <?php
            include "koneksi.php";

            $query="select * from pesanalumni order by id";

            $sql=mysqli_query($conn,$query) or die("Proses cetak gagal");
        
            $no=1;
            while($hasil=mysqli_fetch_array($sql)){
            echo "<tr>
            <td>$no</td>
            <td>  $hasil[0]  </td>
            <td>  $hasil[1]  </td>
            <td>  $hasil[2]  </td>
            <td>  $hasil[3]  </td>
            <td>  $hasil[4]  </td>
            <td>  $hasil[5]  </td>
            <td>  $hasil[6]  </td>
            <td>  $hasil[7]  </td>
            <td>
            <a href='edit.php?id=$hasil[0]>'>Edit</a> |
            <a href='hapus.php?id=$hasil[0]>'>Delete</a>
            </td>
            </tr>";
            $no++;
            }
        ?>
    </table>
    <br><a href="home.php">Beranda</a>
</body>
</html>