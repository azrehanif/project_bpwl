<?php
include '../model/database_penjualan.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
    $db->input($_POST['id_penjualan'], $_POST['id_produk'],  
    $_POST['jumlah'], $_POST['total_harga'], $_POST['tanggal_transaksi']);
    header("location:../view/tampil_penjualan.php");
}else if($aksi == "hapus"){
    $db->hapus($_GET['id']);
    header("location:../view/tampil_penjualan.php");
}else if($aksi == "update"){
    $db->update($_POST['id_penjualan'], $_POST['id_produk'],  
    $_POST['jumlah'], $_POST['total_harga'], $_POST['tanggal_transaksi']);
    header("location:../view/tampil_penjualan.php");
}
?>