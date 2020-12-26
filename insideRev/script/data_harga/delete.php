<?php 
	include 'koneksi.php';
	$id_harga = $_GET['id_harga'];

	//query delete
	$query = "DELETE FROM tb_harga WHERE id_harga = '$id_harga'";
	mysqli_query($koneksi,$query);

	header("location:../../data_harga.php");
?>