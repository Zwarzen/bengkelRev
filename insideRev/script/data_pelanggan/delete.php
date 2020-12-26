<?php 
	include 'koneksi.php';
	$id_pelanggan = $_GET['id_pelanggan'];

	//query delete
	$query = "DELETE FROM tb_pelanggan WHERE id_pelanggan = '$id_pelanggan'";
	mysqli_query($koneksi,$query);

	header("location:../../tables.php");
?>