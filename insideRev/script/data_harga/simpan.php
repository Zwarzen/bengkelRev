<!--simpan.php-->
<?php

	include 'koneksi.php';

	//menyimpan ke dalam variable
	print_r($_POST);
	$id_harga		= $_POST['id_harga']; 
	$nama_paket 	= $_POST['nama_paket'];
	$harga		  	= $_POST['harga'];
	$keterangan		= $_POST['keterangan'];
	echo $nama_paket;

	//print_r($_POST);

	//query insert
	$query = "INSERT INTO tb_harga SET id_harga 	= '$id_harga', 
							  		   nama_paket 	= '$nama_paket', 
							  		   harga		= '$harga' ,
							  		   keterangan	= '$keterangan'"
							  		   ;

	//echo $query;
	mysqli_query($koneksi, $query);

	//mengalihkan ke halaman read
	header('location:../../data_harga.php?pesan='. "Data berhasil disimpan");
?>