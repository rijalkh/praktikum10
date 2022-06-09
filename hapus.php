<?php
    include 'koneksi.php';
    // menyimpan data id kedalam variabel
    $id = (isset($_GET['id']))?$_GET['id']:'';
    $query="DELETE from pesanalumni where id='$id'";
    mysqli_query($conn, $query);
    header("location:cetakPesan.php");
?>