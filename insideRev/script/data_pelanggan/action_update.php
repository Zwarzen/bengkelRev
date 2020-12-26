<?php 
	include 'koneksi.php';
	//penamaan variabel

	$id_pelanggan 		= $_POST['id_pelanggan']; 
	$nama_pelanggan 	= $_POST['nama_pelanggan'];
	$pembayaran  	= $_POST['pembayaran'];
	$alamat 		= $_POST['alamat'];
	$no_telp 		= $_POST['no_telp'];
	$status			= $_POST['status'];

	print_r($_POST);

	//echo "tes 1";
	//query update data
	$query="UPDATE tb_pelanggan SET id_pelanggan 	= '$id_pelanggan', 
							  nama_pelanggan 	= '$nama_pelanggan', 
							  pembayaran 	= '$pembayaran', 
							  alamat 		= '$alamat', 
							  no_telp 		= '$no_telp',
							  status 		= '$status'
							  WHERE id_pelanggan = '$id_pelanggan'";
	//echo "$query";
	//echo "tes 2";

	mysqli_query($koneksi, $query);
	// mengalihkan ke halaman index2.php
	header("location:../../tables.php");
?>