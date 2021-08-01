<?php 
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];


$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);


if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	if($data['level']=="pemilik"){

		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pemilik";
		header("location:../view/indexpemilik.html");



	}else if($data['level']=="pegawai"){

		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pegawai";
		header("location:../view/indexpegawai.html");

	}else{

		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}

?>