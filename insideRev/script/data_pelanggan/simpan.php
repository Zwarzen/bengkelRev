<!--simpan.php-->
<?php

	include 'koneksi.php';

	//menyimpan ke dalam variable
	print_r($_POST);
	$id_pelanggan 		= $_POST['id_pelanggan']; 
	$nama_pelanggan 	= $_POST['nama_pelanggan'];
	$pembayaran  	= $_POST['pembayaran'];
	$alamat 		= $_POST['alamat'];
	$no_telp 		= $_POST['no_telp'];
	$status			= $_POST['status'];
	echo $nama_pelanggan;

	//print_r($_POST);

	//query insert
	$query = "INSERT INTO tb_pelanggan SET id_pelanggan = '$id_pelanggan', 
							  nama_pelanggan 		= '$nama_pelanggan', 
							  pembayaran 		= '$pembayaran', 
							  alamat 			= '$alamat', 
							  no_telp 			= '$no_telp', 
							  status 			= '$status'
			 					 ";

	//echo $query;
	mysqli_query($koneksi, $query);

	

	//mengalihkan ke halaman read
	header('location:../../tables.php?pesan='. "Data berhasil disimpan");
?>