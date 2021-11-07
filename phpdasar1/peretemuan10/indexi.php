<?php 

$conn=mysqli_connect("localhost","root","","phpdasar");

$result=mysqli_query($conn,"SELECT * FROM mahasiswa");

if (isset($_POST['cari'])) {
	$cari=$_POST['keyword'];
	$result=mysqli_query($conn,"SELECT * FROM mahasiswa WHERE nama LIKE '%$cari%' OR 
																nrp LIKE '%$cari%' OR
																email LIKE '%$cari%' ");
}//else{

	//$result=mysqli_query($conn,"SELECT * FROM mahasiswa");
//}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<a href="uda.php">TAMBAH DATA MAHASISWA</a>
	<form action="indexi.php" method="post">
		<input type="text" name="keyword" autofocus placeholder="Masukan keyword Pencarian" autocomplete="off">
		<button type="submit" name="cari">Cari</button>
	</form>
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
		<?php  $a=1; ?>
		<?php while ($row=mysqli_fetch_assoc($result)): ?>
		<tr>
			<td><?php echo $a; ?></td>
			<td><a href="hapuss.php?id=<?php echo $row['id']; ?>" onclick="return confirm('ANDA YAKIN HAPUS DATA INI???') ">Hapus</a> |
				<a href="tamba.php?id=<?php echo $row['id']; ?>">Ubah</a></td>
			<td><img src="img <?php echo $row['gambar']; ?>"></td>
			<td><?php echo $row['nama']; ?></td>
			<td><?php echo $row['nrp']; ?></td>
			<td><?php echo $row['jurusan']; ?></td>
			<td><?php echo $row['email']; ?> </td>
		</tr>
		<?php $a++; ?>
	<?php endwhile; ?>
	</table>

</body>
</html>