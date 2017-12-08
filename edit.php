<html>
<head>
	
	<title>TUGAS DARI BULE</title>
</head>
<body>
	<h2>CRUD WKWKLAND</h2>
	<p><a href="index.php">Beranda</a> || <a href="tambah.php">Tambah Datanya</a></p>

	<h3>EDIT Data Bola Piala Dunia</h3>


	<?php
	include('koneksi.php');
	$id = $_GET['id'];

	// if(isset($_POST['edit']))
	// {	
	// 	$nama=$_POST['nama'];
	// 	$tuan_rumah=$_POST['tuan_rumah'];
	// 	$tahun=$_POST['tahun'];
	// 	$result = ("UPDATE bola SET nama='$nama',tuan_rumah='$tuan_rumah',tahun='$tahun' WHERE id=$id");

	// 	header("Location: index.php");

	// }

	$querybola = "SELECT * FROM bola WHERE id='$id'";
	$hasil = 	$koneksi->query($querybola);
	$data = $hasil->fetch_assoc();
	
	
	?>


	<form action="edit-proses.php" method="post">

		<table cellpadding="3" cellspacing="0">

			
			<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
			<tr>
				<td> Nama Bola </td>
				<td> : </td>
				<td > <input type="text" name="tambah_nama_bola" value="<?php echo $data['nama'];?>" placeholder=""></td>
			</tr>


			<tr>
				<td> Tuan Rumah </td>
				<td> : </td>
				<td > <input type="text" name="tambah_tuan_rumah" value="<?php echo $data['tuan_rumah'];?>" placeholder=""></td>
			</tr>


			<tr>
				<td> Tahun </td>
				<td> : </td>
				<td > <input type="text" name="tambah_tahun" value="<?php echo $data['tahun'];?>" placeholder=""></td>
			</tr>


			<tr>
				<td>&nbsp; </td>
				<td> </td>
				<td> <input type="submit" name="simpan" value="SELESAI" placeholder=""></td>
			</tr>			

		</table>
	</form>	
</body></html>