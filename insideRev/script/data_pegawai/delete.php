<?php 
	include 'koneksi.php';
	$id_pegawai = $_GET['id_pegawai'];

	//query delete
	$query = "DELETE FROM tb_pegawai WHERE id_pegawai = '$id_pegawai'";
	mysqli_query($koneksi,$query);

	header("location:../../data_pegawai.php");
?>