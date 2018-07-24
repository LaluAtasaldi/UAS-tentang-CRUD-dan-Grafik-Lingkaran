<?php
include 'koneksi.php';
$nama_ruangan = $_POST['nama_ruangan'];
$fungsi_ruangan = $_POST['fungsi_ruangan'];
$luas = $_POST['luas'];
mysqli_query($host,"INSERT INTO ruangan
VALUES('','$nama_ruangan','$fungsi_ruangan','$luas')");
header("location:barang.php?pesan=input");
?>