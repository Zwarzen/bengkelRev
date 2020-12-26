<?php 
	include 'koneksi.php';
	//penamaan variabel

	$id_pegawai		= $_POST['id_pegawai']; 
	$nama_pegawai 	= $_POST['nama_pegawai'];
	$aktifitas		= $_POST['aktifitas'];

	print_r($_POST);

	//echo "tes 1";
	//query update data
	$query="UPDATE tb_pegawai SET id_pegawai 	= '$id_pegawai', 
							  nama_pegawai 	= '$nama_pegawai', 
							  aktifitas		= '$aktifitas'  
							  WHERE id_pegawai = '$id_pegawai'
							  ";
	//echo "$query";
	//echo "tes 2";

	mysqli_query($koneksi, $query);
	// mengalihkan ke halaman index2.php
	header("location:../../data_pegawai.php");
?>