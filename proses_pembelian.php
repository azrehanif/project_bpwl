<?php
include '../model/database_pembelian.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
    $db->input($_POST['id_pembelian'], $_POST['id_produk'], $_POST['id_supplier'], 
    $_POST['jumlah'], $_POST['tanggal']);
    header("location:../view/tampil_pembelian.php");
}else if($aksi == "hapus"){
    $db->hapus($_GET['id']);
    header("location:../view/tampil_pembelian.php");
}else if($aksi == "update"){
    $db->update($_POST['id_pembelian'], $_POST['id_produk'], $_POST['id_supplier'], 
    $_POST['jumlah'], $_POST['tanggal']);
    header("location:../view/tampil_pembelian.php");
}
?>