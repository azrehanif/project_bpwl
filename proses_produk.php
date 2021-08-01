<?php
include '../model/database_produk.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
    $db->input($_POST['id_produk'], $_POST['nama_produk'], $_POST['kategori_produk'], 
    $_POST['harga'], $_POST['stok']);
    header("location:../view/tampil_produk.php");
}else if($aksi == "hapus"){
    $db->hapus($_GET['id']);
    header("location:../view/tampil_produk.php");
}else if($aksi == "update"){
    $db->update($_POST['id_produk'], $_POST['nama_produk'], $_POST['kategori_produk'], 
    $_POST['harga'], $_POST['stok']);
    header("location:../view/tampil_produk.php");
}
?>