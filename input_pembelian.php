<head>	
	<title>Tambah Data Pembelian</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-witdh, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
	<div class="limiter">
			<div class="container-table100">
				<div class="wrap-table100">
					<div class="table">

<form action="../controller/proses_pembelian.php?aksi=tambah" method="post">

<table>
<tr>Tambah Data Pembelian</tr>
    <tr>
        <td>Id Pembelian</td>
        <td><input type="text" name="id_pembelian"></td>
    </tr>
    <tr>
        <td>Id Produk</td>
        <td><input type="text" name="id_produk"></td>
    </tr>
    <tr>
        <td>Id Supplier</td>
        <td><input type="text" name="id_supplier"></td>
    </tr>
    <tr>
        <td>Jumlah</td>
        <td><input type="text" name="jumlah"></td>
    </tr>
    <tr>
        <td>Tanggal</td>
        <td><input type="text" name="tanggal"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Simpan"></td>
    </tr>
    </div>
    </div>
    </div>
    </div>
    </div>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script src="js/main.js"></script>
    </body>  
</table>
</form>