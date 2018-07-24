<?php
include 'koneksi.php';
$Id_barang = $_POST['Id_barang'];
$nama_barang = $_POST['nama_barang'];
$merek = $_POST['merek'];
$keadaan = $_POST['keadaan'];
$Id_ruangan = $_POST['Id_ruangan'];
mysqli_query($host,"UPDATE barang SET Id_barang='$Id_barang', nama_barang='$nama_barang', merek='$merek', keadaan='$keadaan', Id_ruangan='$Id_ruangan' WHERE Id_barang='$Id_barang'");
header("location:barang.php?pesan=update");
?>