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
<body>



	<!--FOOTER-->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <a class="navbar-brand" href="#">&nbsp;&nbsp;<b>DATABASE PENJUALAN</b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <form class="form-inline ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
      </div>
    </nav>


<!--isi-->
<div class="p-3 mb-2 bg-light">

<div class="container border" style="background-color: white">
	<br>
		<a class="tombol btn btn-outline-info" href="index.php"><< Kembali</a>
	<br><br><br>

	<h3>Masukan data barang baru</h3>
	<br>
	<div class="perataan">
		<div> <br><img src="img/tambah.png" height="250" width="250"> &nbsp;&nbsp;&nbsp;&nbsp;</div>
		<div> <br>
			<form action="simpan_input.php" method="post">
				<table>
					<tr> 
						<td>Id Barang</td>
						<td><fieldset disabled>
						   <input type="text" class="form-control" id="disabledTextInput"  require placeholder=" *Diisi Otomatis">
						</td>
					</tr>
					<tr><td>&nbsp;</td></tr>
					<tr>
						<td>Nama</td>
						<td><input type="text" class="form-control" name="nama_barang" style="width: 480px; height: 35px;" required></td>
					</tr>
					<tr><td>&nbsp;</td></tr>
					<tr>
						<td>Persediaan&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td><input type="text" class="form-control" name="stok" style="width: 480px; height: 35px;" required>
					</tr>
					<tr><td>&nbsp;</td></tr>
					<tr>
						<td>Harga&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td><input type="text" class="form-control" name="harga" style="width: 480px; height: 35px;" required>
					</tr>
					<tr><td>&nbsp;</td></tr>
					<tr>
						<td>Harga Jual&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td><input type="text" class="form-control" name="harga_jual" style="width: 480px; height: 35px;" required>
					</tr>
					<tr><td>&nbsp;</td></tr>
				</table>
				<input type="submit" value="Simpan" class="btn btn-success" style="height: 50px; width: 480px;">
			</form>
		</div>
	</div>
	<br>
</div>


      <script src="js/jquery-3.3.1.slim.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
</body>
</html>