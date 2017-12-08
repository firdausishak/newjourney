<?php
if (isset($_POST['tambah'])){
	include ("koneksi.php");
	// $id = $_POST['tambah_id'];
	$namabola = $_POST['tambah_nama_bola'];
	$tuanrumah = $_POST['tambah_tuan_rumah'];
	$tahun = $_POST['tambah_tahun'];
	$tambah = ("INSERT INTO bola VALUES ('' , '$namabola', '$tuanrumah' , '$tahun')") or die(mysql_error());

	if ($koneksi->query($tambah) === TRUE) {
		echo "Data berhasil di input <br>";
		echo '<a href="index.php">Kembali menu awal</a>';	
		
	} 
	else{
		echo "data " . $tambah . " gagal di input " . $koneksi->error . ".<br>";
		echo '<a href="tambah.php">Kembali Ke tambah</a>';
		echo '<a href="index.php">Kembali menu awal</a>';
	}


}

?>