<?php 
require 'function.php';
$mahasiswa= query("SELECT * FROM mahasiswa");

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Mahasiswa</title>
</head>
<body>
	<h3 align="center">Daftar Mahasiswa</h3>
	<table border="1" cellpadding="10" cellspacing="0" align="center">
		<tr>
			<th>No</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>Nama</th>
			<th>Nrp</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>
		<?php $a=1; ?>
		<?php foreach ($mahasiswa as $mhs ): ?>
		<tr>
			<td><?php echo $a; ?></td>
			<td><a href="">Hapus</a>|<a href="">Ubah</a></td>
			<td><img src="img/<?php echo $mhs['gambar']; ?>" width="61"></td>
			<td><?php echo $mhs['nama']; ?></td>
			<td><?php echo $mhs['nrp']; ?></td>
			<td><?php echo $mhs['email']; ?></td>
			<td><?php echo $mhs['jurusan']; ?></td>
		</tr>
		<?php $a++; ?>
	<?php endforeach; ?>
		
	</table>

</body>
</html>