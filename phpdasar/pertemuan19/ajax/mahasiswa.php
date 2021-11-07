<?php 
require '../function.php';
$keyword=$_GET['keyword'];

$query=("SELECT * FROM mahasiswa WHERE nama Like '%$keyword%' OR 
											  nrp Like '%$keyword%' OR
											  email Like '%$keyword%' OR
											  jurusan Like '%$keyword%'");
$mahasiswa= query($query);

 ?>

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