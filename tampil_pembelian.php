<?php
include '../model/database_pembelian.php';
$db = new database();
?>
<head>	
	<title>Data Pembelian</title>
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

<a href="input_pembelian.php">Input Data Pembelian </a><a href="indexpemilik.html"><button>    | Logout</button></a>
<table border="1">
    <tr>
        <th>No</th>
        <th>Id Pembelian</th>
        <th>Id Produk</th>
        <th>Id Supplier</th>
        <th>Jumlah</th>
        <th>Tanggal</th>
        <th>Opsi</th>
    </tr>
    <?php
    $no = 1;
    foreach($db->tampil_data() as $x){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $x['id_pembelian']; ?></td>
        <td><?php echo $x['id_produk']; ?></td>
        <td><?php echo $x['id_supplier']; ?></td>
        <td><?php echo $x['jumlah']; ?></td>
        <td><?php echo $x['tanggal']; ?></td>
        <td>
            <a href="edit_pembelian.php?id=<?php echo $x['id_pembelian']; ?>&aksi=edit">Edit</a>
            <a href="../controller/proses_pembelian.php?id=<?php echo $x['id_pembelian']; ?>&aksi=hapus">| Hapus</a>
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
<?php
    }
?>