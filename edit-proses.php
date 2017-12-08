<?php
if (isset($_POST['simpan'])) {
	include ("koneksi.php");
	$id = $_POST['id'];
	$nama = $_POST['tambah_nama_bola'];
	$tuan_rumah = $_POST['tambah_tuan_rumah'];
	$tahun = $_POST['tambah_tahun'];
	$ubah = ("UPDATE bola SET nama='$nama', tuan_rumah='$tuan_rumah' , tahun='$tahun' WHERE id='$id'") or die(mysqli_error());
	
	if ($koneksi->query($ubah) === TRUE) {
		echo "Data berhasil di ubah <br>";
		echo '<a href="index.php">Kembali menu awal</a>';	
		

	}
	else{
		echo mysqli_error($koneksi);
		echo "Data GAGAL di ubah <br>";
		echo '<a href="index.php">Kembali menu awal</a>';	

	}

}




?>