<?php
include "../model/database_penjualan.php";
$db = new database();
?>

<head>	
	<title>Edit Data Penjualan</title>
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

<form action="../controller/proses_penjualan.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){
?>
<table>
<tr>Edit Data Penjualan</tr>
    <tr>
        <td>Id Penjualan</td>
        <td>
            <input type="text" name="id_penjualan" value="<?php echo $d['id_penjualan'] ?>">
        </td>
    </tr>
    <tr>
        <td>Id Produk</td>
        <td>
            <input type="text" name="id_produk" value="<?php echo $d['id_produk'] ?>">
        </td>
    </tr>
    <tr>
        <td>Jumlah</td>
        <td>
            <input type="text" name="jumlah" value="<?php echo $d['jumlah'] ?>">
        </td>
    </tr>
    <tr>
        <td>Total</td>
        <td>
            <input type="text" name="total_harga" value="<?php echo $d['total_harga'] ?>">
        </td>
    </tr>
    <tr>
        <td>Tanggal Transaksi</td>
        <td>
            <input type="text" name="tanggal_transaksi" value="<?php echo $d['tanggal_transaksi'] ?>">
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" value="Edit">
        </td>
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
<?php
}
?>
</form>

