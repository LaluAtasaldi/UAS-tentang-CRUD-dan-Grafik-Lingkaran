<?php
include 'koneksi.php';
$nama_barang = $_POST['nama_barang'];
$merek = $_POST['merek'];
$keadaan = $_POST['keadaan'];
$Id_ruangan = $_POST['Id_ruangan'];
mysqli_query($host,"INSERT INTO barang
VALUES('','$nama_barang','$merek','$keadaan','$Id_ruangan')");
header("location:barang.php?pesan=input");
?>