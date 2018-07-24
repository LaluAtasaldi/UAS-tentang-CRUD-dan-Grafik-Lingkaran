<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>UAS Lalu Atasaldi</title>
    <link rel="stylesheet" type="text/css" href="web-fonts-with-css/css/fontawesome-all.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/latihan.css">
    <script src="assets/Chart.bundle.js"></script>
	<script src="assets/utils.js"></script>
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
    <h6></h6>

    <!--ISI-->
      <!--konten gambar-->
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  		<ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
	  		</ol>
		  	<div class="carousel-inner" role="listbox">
			    <div class="carousel-item active">
			      	<img class="d-block w-100" src="img/1.jpg" alt="First slide" height="500">
			    </div>
			    <div class="carousel-item">
			      	<img class="d-block w-100" src="img/2.jpg" alt="Second slide" height="500">
			    </div>
			    <div class="carousel-item">
			      	<img class="d-block w-100" src="img/3.jpg" alt="Third slide" height="500">
			    </div>
			    <div class="carousel-item">
			      	<img class="d-block w-100" src="img/4.jpg" alt="Four slide" height="500">
			    </div>
			    <div class="carousel-item">
			      	<img class="d-block w-100" src="img/5.jpg" alt="Five slide" height="500">
			    </div>
			    <div class="carousel-item">
			      	<img class="d-block w-100" src="img/6.jpg" alt="Six slide" height="500">
			    </div>
	  		</div>
		  	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
		  	</a>
		  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
		  	</a>
		</div>
		<br>

		<!--konten data barang dan grafik-->
		<div class="row">
		  	<div class="col-8">
		  		<h4 align="center">Data Barang</h4>
			  		<table class="table table-hover " style="text-align: center;">
						<thead class="bg-info">
					        <tr>
					          <th scope="col">No</th>
					          <th scope="col">Nama Barang</th>
					          <th scope="col">Merek</th>
					          <th scope="col">Keadaan</th>
					        </tr>
				      	</thead>
					
					<?php
					include "koneksi.php";
					$query_mysql = mysqli_query($host,"SELECT * FROM barang")or
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

		  	<div class="col-4">
		  		<h4 align="center">Grafik Kondisi Barang</h4>
		  		<?php  
			mysql_connect("localhost","root", "");
			mysql_select_db("e-inventori");
		?>
		  		<?php 
				$data = mysql_query("SELECT count(keadaan) AS kon_baik FROM barang WHERE keadaan ='Baik'");
						while ($kon = mysql_fetch_array($data)) {
							echo "<h6> keadaan Baik : ".$kon['kon_baik']." Unit</h6>";
						}
				?>
				<?php 
				$data = mysql_query("SELECT count(keadaan) AS kon_rusak FROM barang WHERE keadaan ='Rusak'");
						while ($kon = mysql_fetch_array($data)) {
							echo "<h6> keadaan Rusak : ".$kon['kon_rusak']." Unit</h6>";
						}
				?>


				
				<div id="canvas-holder" style="width:150%" >
						<canvas id="chart-area"></canvas>
					</div>
					<script>

						<?php 
							// query untuk menampilkkan jumlah barang keadaan baik
							$data = mysql_query("SELECT count(keadaan) AS kon_baik FROM barang WHERE keadaan ='Baik'");
								while ($kon = mysql_fetch_array($data)) {
								$baik = $kon['kon_baik'];
								}
							// query untuk menampilkkan jumlah barang keadaan rusak
							$data = mysql_query("SELECT count(keadaan) AS kon_rusak FROM barang WHERE keadaan ='Rusak'");
								while ($kon = mysql_fetch_array($data)) {
								$rusak = $kon['kon_rusak'];
								}
						?>
						var dataBaik = <?php echo $baik;?>;
						var dataRusak = <?php echo $rusak;?>;

						var config = {
							type: 'pie',
							data: {
								datasets: [{
									data: [
									// pemanggilan variabel untuk menampilkan jumlah data pada grafik
										dataBaik,
										dataRusak
									],
									backgroundColor: [
										window.chartColors.blue,
										window.chartColors.orange,
									],
									label: 'keadaan Barang'
								}],
								labels: [
								//tambah label pada cart
									<?php
									$data = mysql_query("SELECT keadaan FROM barang GROUP BY keadaan");
										while ($kon = mysql_fetch_array($data)) {
									?>
									'<?php echo $kon['keadaan'];?>',
									<?php
										}
									?>
								]
							},
							options: {
								responsive: true
							}
						};

						window.onload = function() {
							var ctx = document.getElementById('chart-area').getContext('2d');
							window.myPie = new Chart(ctx, config);
						};

					</script>
		  	</div>
		</div>



      <script src="js/jquery-3.3.1.slim.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
</body>
</html>