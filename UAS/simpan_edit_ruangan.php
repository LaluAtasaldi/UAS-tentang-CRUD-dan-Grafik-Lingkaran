<?php
include 'koneksi.php';
$Id_ruangan = $_POST['Id_ruangan'];
$nama_ruangan = $_POST['nama_ruangan'];
$fungsi_ruangan = $_POST['fungsi_ruangan'];
$luas = $_POST['luas'];
mysqli_query($host,"UPDATE ruangan SET Id_ruangan='$Id_ruangan', nama_ruangan='$nama_ruangan', fungsi_ruangan='$fungsi_ruangan', luas='$luas' WHERE Id_ruangan='$Id_ruangan'");
header("location:barang.php?pesan=update");
?>