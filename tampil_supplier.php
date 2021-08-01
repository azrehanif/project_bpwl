<?php
include '../model/database_supplier.php';
$db = new database();
?>
<head>	
	<title>Data Supplier</title>
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
    <link rel="stylesheet" href="style.css">
</head>
<style>
        body{
            background-image: url("../image/home/present.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            height: 100%;
        }
        .title{
            text-align: center;
            font-size: 2.5em;
            color: #000;
        }

     
</style>
<body>
	<div class="limiter">
			<div class="container-table100">
				<div class="wrap-table100">
					<div class="table">

<a href="input_supplier.php">Input Data Supplier </a><a href="indexpemilik.html"><button>    | Logout</button></a>
<table border="1">
    <tr>
        <th>No</th>
        <th>Id Supplier</th>
        <th>Nama Supplier</th>
        <th>Alamat</th>
        <th>No Telepon</th>
        <th>Opsi</th>
    </tr>
    <?php
    $no = 1;
    foreach($db->tampil_data() as $x){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $x['id_supplier']; ?></td>
        <td><?php echo $x['nama_supplier']; ?></td>
        <td><?php echo $x['alamat_supplier']; ?></td>
        <td><?php echo $x['notelp_supplier']; ?></td>
        <td>
            <a href="edit_supplier.php?id=<?php echo $x['id_supplier']; ?>&aksi=edit">Edit</a>
            <a href="../controller/proses_supplier.php?id=<?php echo $x['id_supplier']; ?>&aksi=hapus">| Hapus</a>
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