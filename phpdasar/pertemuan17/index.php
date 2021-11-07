<?php 
session_start();
if (!isset($_SESSION["login"])) {
	header("Location: login.php");
}
require 'function.php';
$mahasiswa= query("SELECT * FROM mahasiswa");
if (isset($_POST['cari'])) {
	$mahasiswa= cari($_POST['keyword']);
}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Mahasiswa</title>
</head>
<body>
	<a href="logout.php">Logout</a>
	<h3 align="center">Daftar Mahasiswa</h3>
	<div align="center">
	<a href="tambah.php">Tambmah Data Mahasiswa</a>
	<br>
	<br>
	<form action="" method="post">
		<input type="text" name="keyword" size="55" autofocus autocomplete="off" placeholder="masukan keyword cari">
		<button type="submit" name="cari">cari</button>
	</form>
	</div>
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
			<td><a href="hapus.php?id=<?php echo$mhs['id']; ?>" onclick="return confirm('Yakin mau hapus'); ">Hapus</a>|<a href="ubah.php?id=<?php echo $mhs ['id']; ?>">Ubah</a></td>
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