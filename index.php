<html>
<head>
	<meta charset="utf-8">
	<title>TUGAS DARI BULE</title>
</head>
<body>
	<h2>CRUD WKWKLAND</h2>
	<p><a href="index.php">Beranda</a> || <a href="tambah.php">Tambah Datanya</a></p>

	<h3>Data Bola Piala Dunia</h3>
	
	<table cellpadding="4" cellspacing="0" border="1">
		<thead>
			<tr bgcolor="#CCCCC">
				
				<th>NAMA</th>
				<th>TUAN RUMAH</th>
				<th>TAHUN</th>
				<th>PILIHAN</th>

			</tr>
			<?php

		// include("koneksi.php");
		// // $querybola = mysql_query("SELECT id, nama, tuan_rumah, tahun FROM bola") or die (mysql_error());
		// if (mysql_num_rows($querybola) == 0) {
		// 	echo "<tr><td colspan='6'> Data kosong kaya hati kamu </td></tr>";
		// } else {
		// 	$no = 1;
		// 	while ($data = mysql_fetch_assoc($querybola)) {
		// 		echo "<tr>";
		// 		echo "<td>" . $no ."</td>";
		// 		echo "<td>" . $data['id'] ."</td>";
		// 		echo "<td>" . $data['nama'] ."</td>";
		// 		echo "<td>" . $data['tuan_rumah'] ."</td>";
		// 		echo "<td>" . $data['tahun'] ."</td>";
		// 		echo '<td><a href="edit.php?id='.$data['id'].'">Edit</a> / <a href="hapus.php?id='.$data['id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	
		// 		echo '</tr>';
		// 		$no++;
		// 	}
		// }



			?>
			<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
			<?php
			include("koneksi.php");
			$querybola = "SELECT id, nama, tuan_rumah, tahun FROM bola";
			$hasil = 	$koneksi->query($querybola);

			if ($hasil->num_rows > 0) {
				while ( $data = $hasil->fetch_assoc()) {
					
					// echo '<td>'.$data['id'].'</td>';
					echo '<td>'.$data["nama"].'</td>';
					echo '<td>'.$data["tuan_rumah"].'</td>';
					echo '<td>'.$data["tahun"].'</td>';
					echo '<td><a href="edit.php?id='.$data['id'].'">Edit</a> / <a href="hapus.php?id='.$data['id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';
					echo '</tr>';
				}
			}else {
				echo "<tr> gaada data</tr>";

			}
			$koneksi->close();

			?>  

		</table>




	</body>
	</html>