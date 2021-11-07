<?php 
require 'functions.php';

$result=query("SELECT * FROM mahasiswa");
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0" align="center">
		<tr>
			<th>No</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>Nama</th>
			<th>Nrp</th>
			<th>Jurusan</th>
			<th>Email</th>
		</tr>
		<?php $a=1; ?>
		<?php foreach ($result as $row ): ?>

		<tr>
			<td><?php echo $a; ?></td>
			<td><a href="">Ubah</a>|<a href="">Hapus</a></td>
			<td><img src="img" <?php echo $row['gambar']; ?>></td>
			<td><?php echo $row['nama']; ?></td>
			<td><?php echo $row['nrp']; ?></td>
			<td><?php echo $row['jurusan']; ?></td>
			<td><?php echo $row['email']; ?></td>
		</tr>
		<?php $a++; ?>
	<?php endforeach; ?>
	</table>

</body>
</html>