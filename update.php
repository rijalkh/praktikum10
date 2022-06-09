<?php
    include 'koneksi.php';
    // menyimpan data kedalam variabel
    $id         = $_POST['id'];
    $posted            = $_POST['tanggal'];
    $nama           = $_POST['nama'];
    $email      = $_POST['email'];
    $address    = $_POST['address'];
    $tahun        = $_POST['thn'];
    $kerja      = $_POST['kerja'];
    $pesan  = $_POST['msg'];
    
    // query SQL untuk insert data ke dalam Mysql
    $query="UPDATE pesanalumni SET id='$id', Posted='$posted',Name='$nama',Email='$email',Address='$address',TahunLulus='$tahun',Pekerjaan='$kerja', Message='$pesan' where id='$id'";
    mysqli_query($conn, $query);
    // mengalihkan ke halaman index.php
    echo "<script>alert('Data yang anda Update sukses');window.location='cetakPesan.php'</script>";
?>