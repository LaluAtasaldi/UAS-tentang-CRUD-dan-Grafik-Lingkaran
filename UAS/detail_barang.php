<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>UAS Lalu Atasaldi</title>

    <link rel="stylesheet" type="text/css" href="web-fonts-with-css/css/fontawesome-all.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/latihan.css">
</head>

<body class="container">
	

	<!--FOOTER-->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
      	<a class="navbar-brand" href="#"><i class="fas fa-cube">&nbsp;&nbsp;</i><b>E - Inventans</b></a>
        <form method="post" class="form-inline ml-auto">
        	<a href="index.php" class="text-white"><b>Home</b></a>
        	<b class="text-white">&nbsp;&nbsp;|&nbsp;&nbsp;</b>
        	<a href="barang.php" class="text-white"><b>Barang</b></a>&nbsp;&nbsp;&nbsp;&nbsp;
        </form>
    </nav>
    <br>

    <!--ISI-->
	<div class="p-3 mb-2 bg-light text-dark">
	<div>
		<h1></h1>
	</div>

	<div class="container border" style="background-color: white">
		<br>
			<a class="tombol btn btn-outline-info" href="barang.php"><< Kembali</a>
		<br><br><br>

	<h3>Detail Barang</h3>


			<br>
			<div class="perataan">
			<div> <br><img src="img/det.png" height="250" width="250"> &nbsp;&nbsp;&nbsp;&nbsp;</div>
			<div><br>
	<?php
	include "koneksi.php";
	$Id_barang = $_GET['Id_barang'];
	$query_mysql = mysqli_query($host,"SELECT * FROM barang WHERE
	Id_barang='$Id_barang'")or die(mysqli_error());
	while($data = mysqli_fetch_array($query_mysql)){
	?>
			<form  method="post">
				<table>
					<br>
					<tr>
						<td>ID Barang</td>
						<td><?php echo $data['Id_barang']?></td>
					</tr>
					<tr>
					<tr>
						<td>Nama Barang&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td><?php echo $data['nama_barang']?></td>
					</tr>
					<tr>
						<td>Merek</td>
						<td><?php echo $data['merek']?></td>	
					</tr>
					<tr>
						<td>Keadaan</td>
						<td><?php echo $data['keadaan']?></td>
					</tr>
					
					<tr>
						<td>Id Ruangan</td>
						<td><?php echo $data['Id_ruangan']?></td>
					</tr>
				</table>
				<br>


				
			</form>
			<br><br>
			</div>
			</div>
	</div>
	</div>
	<?php } ?>	  		



      <script src="js/jquery-3.3.1.slim.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
</body>
</html>