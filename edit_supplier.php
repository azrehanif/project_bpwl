<?php
include "../model/database_supplier.php";
$db = new database();
?>

<head>	
	<title>Edit Data Supplier</title>
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

<form action="../controller/proses_supplier.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){
?>
<table>
<tr>Edit Data Supplier</tr>
    <tr>
        <td>Id Supplier</td>
        <td>
            <input type="text" name="id_supplier" value="<?php echo $d['id_supplier'] ?>">
        </td>
    </tr>
    <tr>
        <td>Nama Supplier</td>
        <td>
            <input type="text" name="nama_supplier" value="<?php echo $d['nama_supplier'] ?>">
        </td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>
            <input type="text" name="alamat_supplier" value="<?php echo $d['alamat_supplier'] ?>">
        </td>
    </tr>
    <tr>
        <td>No Telepon</td>
        <td>
            <input type="text" name="notelp_supplier" value="<?php echo $d['notelp_supplier'] ?>">
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
