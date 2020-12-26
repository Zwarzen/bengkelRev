<?php 
	include 'koneksi.php';
	//penamaan variabel

	$id_harga		= $_POST['id_harga']; 
	$nama_paket 	= $_POST['nama_paket'];
	$harga		= $_POST['harga'];
	$keterangan = $_POST['keterangan'];

	print_r($_POST);

	//echo "tes 1";
	//query update data
	$query="UPDATE tb_harga SET id_harga 	= '$id_harga', 
							  nama_paket 	= '$nama_paket', 
							  harga		= '$harga',
							  keterangan = '$keterangan'  
							  WHERE id_harga = '$id_harga'
							  ";
	//echo "$query";
	//echo "tes 2";

	mysqli_query($koneksi, $query);
	// mengalihkan ke halaman index2.php
	header("location:../../data_harga.php");
?>