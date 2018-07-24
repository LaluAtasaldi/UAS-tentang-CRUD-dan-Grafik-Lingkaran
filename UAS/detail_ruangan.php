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
		$Id_ruangan = $_GET['Id_ruangan'];
		$query_mysql = mysqli_query($host,"SELECT * FROM ruangan WHERE
		Id_ruangan='$Id_ruangan'")or die(mysqli_error());
		while($data = mysqli_fetch_array($query_mysql)){
		?>
					<form  method="post">
						<table>
							<br>
							<tr>
								<td>ID Ruangan</td>
								<td>: <?php echo $data['Id_ruangan']?></td>
							</tr>
							<tr>
							<tr>
								<td>Nama Ruangan&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>: <?php echo $data['nama_ruangan']?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
							</tr>
							<tr>
								<td>Fungsi Ruangan</td>
								<td>: <?php echo $data['fungsi_ruangan']?></td>	
							</tr>
							<tr>
								<td>Luas</td>
								<td>: <?php echo $data['luas']?></td>
							</tr>
						</table>
						<br>
					</form>
				<br><br>
				</div>
				<!-- untuk detail barang yang ada dalam ruanagan -->
				<div>
					<h6>Daftar Nama Barang yanga ada pada ruangan : </h6>
					<table class="table table-bordered" style="text-align: center;">
						<thead class="btn-info">
					        <tr>
					          
					          <th scope="col">no</th>
					          <th scope="col">Nama Barang</th>
					          <th scope="col">Merek</th>
					          <th scope="col">Keadaan</th>
					        </tr>
				      	</thead>
					
					<?php
					include "koneksi.php";
					$Id_ruangan = $_GET['Id_ruangan'];
					$query_mysql = mysqli_query($host,"SELECT ruangan.Id_ruangan, barang.nama_barang, barang.merek, barang.keadaan  FROM ruangan, barang WHERE ruangan.Id_ruangan=barang.Id_ruangan AND ruangan.Id_ruangan='$Id_ruangan'")or
					die(mysqli_error($host));
					$noUrut = 0;
					while($data = mysqli_fetch_array($query_mysql)){
					$noUrut++;
					?> 
						<tbody>
							<tr>
								<td><?php echo $noUrut; ?></td>
								<td><?php echo $data['nama_barang']; ?></td>
								<td><?php echo $data['merek']; ?></td>
								<td><?php echo $data['keadaan']; ?></td>
							</tr>
						</tbody>
					<?php } ?>
					</table>
				</div>


			</div>
	</div>
	</div>
	<?php } ?>	  		



      <script src="js/jquery-3.3.1.slim.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
</body>
</html>