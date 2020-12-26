<!--simpan.php-->
<?php

	include 'koneksi.php';

	//menyimpan ke dalam variable
	print_r($_POST);
	$id_pegawai		= $_POST['id_pegawai']; 
	$nama_pegawai 	= $_POST['nama_pegawai'];
	$aktifitas		  	= $_POST['aktifitas'];
	echo $nama_pegawai;

	//print_r($_POST);

	//query insert
	$query = "INSERT INTO tb_pegawai SET id_pegawai 	= '$id_pegawai', 
							  		   nama_pegawai 	= '$nama_pegawai', 
							  		   aktifitas		= '$aktifitas' ";

	//echo $query;
	mysqli_query($koneksi, $query);

	//mengalihkan ke halaman read
	header('location:../../data_pegawai.php?pesan='. "Data berhasil disimpan");
?>