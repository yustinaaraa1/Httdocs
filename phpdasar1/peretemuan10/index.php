<?php 	
require 'functionsi.php';

$mahasiswa=query("SELECT * FROM mahasiswa");


if (isset($_POST['cari'])) {
	$mahasiswa=cari($_POST["keyword"]);
}



 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0" align="center">
		<h1>6.39--6.56|7.17</h1>
		<a href="tambah.php">TAMBAH DATA MAHASISWA</a><br><br>
		<form action="" method="post">
			<input type="text" name="keyword" autofocus placeholder="Masukan keyword Pencarian" size="45">
			<button type="submit" name="cari">cari</button>
		</form>
		<tr>
			<th>No</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>Nama</th>
			<th>Nrp</th>
			<th>Jurusan</th>
			<th>Email</th>
		</tr>
		<?php 	$a=1; ?>
		<?php 	foreach ($mahasiswa as $row):?>
		<tr>
			<td><?php echo $a; ?></td>
			<td>
				<a href="ubahi.php?id=<?php echo $row['id']; ?> ">Ubah
				</a>|<a href="hapus.php?id= <?php echo $row['id']; ?>" 
					onclick="return confirm('yakin?') " >Hapus</a></td>
			<td><img src="img"<?php echo $row['gambar']; ?>></td>
			<td><?php echo $row['nama'];?></td>
			<td><?php echo $row['nrp']; ?></td>
			<td><?php echo $row['jurusan']; ?></td>
			<td><?php echo $row['email']; ?></td>

		</tr>
		<?php 	$a++?>
	<?php 	endforeach; ?>
	</table>

</body>
</html>