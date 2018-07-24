<?php
include 'koneksi.php';
$Id_ruangan = $_GET['Id_ruangan'];
mysqli_query($host,"DELETE FROM ruangan WHERE Id_ruangan='$Id_ruangan'")or
die(mysqli_error());
header("location:barang.php?pesan=hapus");
?>