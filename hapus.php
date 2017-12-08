<?php
// if (isset($_GET['id'])) {
// 	include ("koneksi.php");
// 	$id = $_GET['id']; 
// 	$hapus = "DELETE FROM bola WHERE id='$id";


// 	if ($koneksi->query($hapus) === TRUE) {
// 		echo "Data berhasil di hapus <br>";
// 		echo '<a href="index.php">Kembali menu awal</a>';	


// 	}
// 	else{
// 		// echo mysqli_error($koneksi);
// 		echo "Data GAGAL di hapus <br>";
// 		echo '<a href="index.php">Kembali menu awal</a>';	

// 	}

// }

if(isset($_GET['id'])){
	
	include('koneksi.php');
	
	$id = $_GET['id'];
	$hapus = "DELETE FROM bola WHERE id='$id'";
	if($koneksi->query($hapus)){

		echo 'Data siswa berhasil di hapus! <br>';		
		echo '<a href="index.php">Kembali</a>';	

	}else{

		echo 'Gagal menghapus data! ';		
		echo '<a href="index.php">Kembali</a>';	
	}

	
}


?>