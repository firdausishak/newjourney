	<?php 
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "sepakbola";

	$koneksi = new mysqli($host, $username, $password, $database) ;
	if ($koneksi->connect_error) {
		die ("Koneksi Gagal:". $koneksi->connect_error);
	} 
// 	$querybola = "SELECT id, nama, tuan_rumah, tahun FROM bola";
// 	$hasil = 	$koneksi->query($querybola);

// 	if ($hasil->num_rows > 0) {
// 		while ( $row = $hasil->fetch_assoc()) {
// 			echo "<br> id: " . $row["id"] . " Nama Bola: " . $row["nama"] . " di selenggarakan di " . $row["tuan_rumah"] . " pada tahun " . $row["tahun"] . ".<br>";
// 		}
// 	}else {
// echo "gaada data";

// 	}
// 	$koneksi->close();

// 	?>