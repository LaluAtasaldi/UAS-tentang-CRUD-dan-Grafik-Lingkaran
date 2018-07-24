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

	<nav class="nav nav-tabs" id="myTab" role="tablist">
		  <a class="nav-item nav-link active" id="nav-barang-tab" data-toggle="tab" href="#nav-barang" role="tab" aria-controls="nav-home" aria-selected="true">Data Barang</a>
		  <a class="nav-item nav-link" id="nav-ruangan-tab" data-toggle="tab" href="#nav-ruangan" role="tab" aria-controls="nav-profile" aria-selected="false">Ruangan</a>
	</nav>
	<br>
	
	<div class="tab-content" id="nav-tabContent">
		  <div class="tab-pane fade show active" id="nav-barang" role="tabpanel" aria-labelledby="nav-barang-tab">

		  		<!--konten data barang-->
		  		<h4>Data Barang</h4>
		  		<br>
		  		<a class="tombol btn btn-outline-info" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus">&nbsp;&nbsp;</i>Tambah Data</a>
		  		<h1></h1>
			  		<table class="table table-hover table-bordered" style="text-align: center;">
						<thead class="bg-info">
					        <tr>
					          <th scope="col">No</th>
					          <th scope="col">Nama Barang</th>
					          <th scope="col">Merek</th>
					          <th scope="col">Keadaan</th>
					          <th scope="col">Ruangan</th>
					          <th scope="col">Opsi</th>

					        </tr>
				      	</thead>
					
					<?php
					include "koneksi.php";
					$query_mysql = mysqli_query($host,"SELECT barang.Id_barang, barang.nama_barang, barang.merek, barang.keadaan, ruangan.nama_ruangan FROM barang, ruangan WHERE barang.Id_ruangan=ruangan.Id_ruangan ORDER BY Id_barang")or
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
								<td><?php echo $data['nama_ruangan']; ?></td>
								<td>
									<a href="edit_barang.php?Id_barang=<?php echo $data['Id_barang'];?>"><button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button></a>

									<a href="detail_barang.php?Id_barang=<?php echo $data['Id_barang'];?>"><button type="button" class="btn btn-warning"><i class="fas fa-eye"></i></button></a>

									<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus_barang.php?Id_barang=<?php echo $data['Id_barang']; ?>' }" ><button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button></a>

									
								</td>
							</tr>
						</tbody>
					<?php } ?>
					</table>

					<!-- modal input -->
					<div id="myModal" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									
									<h4 class="modal-title">Tambah Barang Baru</h4>
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								</div>
								<div class="modal-body">
									<form action="simpan_input_barang.php" method="post">
										<div class="form-group">
											<label>Nama Barang</label>
											<input name="nama_barang" type="text" class="form-control" required>
										</div>
										<div class="form-group">
											<label>Merek</label>
											<input name="merek" type="text" class="form-control" required>
										</div>	
										<div class="form-group">
											<label>Keadaan</label>
											<input name="keadaan" type="text" class="form-control" required>
										</div>	
										<div class="form-group">
											<label for="exampleFormControlSelect1">Ruangan</label>
										    <select name="Id_ruangan" type="number" class="form-control" id="exampleFormControlSelect1"  required>
											    <option>1</option>
											    <option>2</option>
											    <option>3</option>
											    <option>4</option>
										    </select>
											<small id="passwordHelpBlock" class="form-text text-muted">
											  *Ket : (1) Lab. Komputer, (2) Perpustakaan, (3) LPPM, (4) BEM.
											</small>
										</div>	
																									

									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
										<input  type="submit" class="btn btn-primary" value="Simpan">
									</div>
								</form>
							</div>
						</div>
					</div>


		  </div>
		  <div class="tab-pane fade" id="nav-ruangan" role="tabpanel" aria-labelledby="nav-ruangan-tab">
		  		<!--konten data barang-->
		  		<h4>Data Ruangan</h4>
		  		<br>
		  		<a class="tombol btn btn-outline-info" data-toggle="modal" data-target="#myModal2"><i class="fas fa-plus">&nbsp;&nbsp;</i>Tambah Data</a>
		  		<h1></h1>
			  		<table class="table table-hover table-bordered" style="text-align: center;">
						<thead class="bg-info">
					        <tr>
					          <th scope="col">No</th>
					          <th scope="col">Nama Ruangan</th>
					          <th scope="col">Fungsi Ruangan</th>
					          <th scope="col">Luas</th>
					          <th scope="col">Opsi</th>
					        </tr>
				      	</thead>
					
					<?php
					include "koneksi.php";
					$query_mysql = mysqli_query($host,"SELECT * FROM ruangan")or
					die(mysqli_error($host));
					$noUrut = 0;
					while($data = mysqli_fetch_array($query_mysql)){
						$noUrut++;
					?>
						<tbody>
							<tr>
								<td><?php echo $noUrut; ?></td>
								<td><?php echo $data['nama_ruangan']; ?></td>
								<td><?php echo $data['fungsi_ruangan']; ?></td>
								<td><?php echo $data['luas']; ?> m2</td>
								<td>
									<a href="edit_ruangan.php?Id_ruangan=<?php echo $data['Id_ruangan'];?>"><button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button></a>

									<a href="detail_ruangan.php?Id_ruangan=<?php echo $data['Id_ruangan'];?>"><button type="button" class="btn btn-warning"><i class="fas fa-eye"></i></button></a>

									<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus_ruangan.php?Id_ruangan=<?php echo $data['Id_ruangan']; ?>' }" ><button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button></a>
								</td>
							</tr>
						</tbody>
					<?php } ?>
					</table>

					<!-- modal input -->
					<div id="myModal2" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									
									<h4 class="modal-title">Tambah Barang Baru</h4>
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								</div>
								<div class="modal-body">
									<form action="simpan_input_ruangan.php" method="post">
										<div class="form-group">
											<label>Nama Ruangan</label>
											<input name="nama_ruangan" type="text" class="form-control" required>
										</div>
										<div class="form-group">
											<label>Fungsi Ruangan</label>
											<input name="fungsi_ruangan" type="text" class="form-control" required>
										</div>	
										<div class="form-group">
											<label>Luas</label>
											<input name="luas" type="text" class="form-control" required>
										</div>														

									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
										<input  type="submit" class="btn btn-primary" value="Simpan">
									</div>
								</form>
							</div>
						</div>
					</div>
		  </div>

	</div>		

		


					



      <script src="js/jquery-3.3.1.slim.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
</body>
</html>