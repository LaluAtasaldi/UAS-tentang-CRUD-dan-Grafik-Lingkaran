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

	<h3>Edit Ruangan</h3>


			<br>
			<div class="perataan">
			<div> <br><img src="img/edit.jpg" height="250" width="250"> &nbsp;&nbsp;&nbsp;&nbsp;</div>
			<div><br>
	<?php
	include "koneksi.php";
	$Id_ruangan = $_GET['Id_ruangan'];
	$query_mysql = mysqli_query($host,"SELECT * FROM ruangan WHERE
	Id_ruangan='$Id_ruangan'")or die(mysqli_error());
	while($data = mysqli_fetch_array($query_mysql)){
	?>
			<form action="simpan_edit_ruangan.php" method="post">
				<table>
					<tr>
						<td>
						<input type="hidden" name="Id_ruangan" value="<?php echo
						$data['Id_ruangan'] ?>">
						</td>
					</tr>
					<tr>
						<td>Id. Ruangan</td>
						<td>
							<fieldset disabled>
							<input type="text" name="Id_ruangan" class="form-control" id="disabledTextInput"  value="<?php echo $data['Id_ruangan'] ?>">
						</td>
					</tr>
					
					<tr>
						<td>Nama Ruangan&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td>
						<input type="text" name="nama_ruangan" class="form-control" value="<?php echo
						$data['nama_ruangan'] ?>" style="height: 35px; width: 480px;">
						</td>
					</tr>
					
					<tr>
						<td>Fungsi Ruangan</td>
						<td>
						<input type="text" name="fungsi_ruangan" class="form-control" value="<?php echo
						$data['fungsi_ruangan'] ?>" style="height: 35px; width: 480px;">
						</td>
					</tr>
					
					<tr>
						<td>Luas</td>
						<td>
						<input type="text" name="luas" class="form-control" value="<?php echo
						$data['luas'] ?>" style="height: 35px; width: 480px;">
						</td>
					</tr>
					
				
				</table>
				<br>

				<a onclick="if(confirm('Apakah anda yakin ingin menyimpan data ini ??')){ location.href='simpan_edit_ruangan.php?Id_ruangan=<?php echo $data['Id_ruangan']; ?>' }" ><button type="submit" value="Simpan" class="btn btn-success" style="height: 50px; width: 600px;">Simpan</button></a>

				
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