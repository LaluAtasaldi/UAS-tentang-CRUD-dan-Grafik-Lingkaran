<?php
include 'koneksi.php';
$Id_barang = $_GET['Id_barang'];
mysqli_query($host,"DELETE FROM barang WHERE Id_barang='$Id_barang'")or
die(mysqli_error());
header("location:barang.php?pesan=hapus");
?>