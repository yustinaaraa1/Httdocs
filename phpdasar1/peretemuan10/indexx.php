<?php 
$conn=mysqli_connect("localhost","root","","phpdasar");
$result=mysqli_query($conn,"SELECT * FROM mahasiswa");

if (isset($_POST['cari'])) {
	$cari=$_POST['keyword'];
	$result=mysqli_query($conn,"SELECT * FROM mahasiswa WHERE nama LIKE '%$cari%'OR 
															  nrp LIKE '%$cari%'OR 
															  jurusan LIKE '%$cari%'OR
															  email LIKE '%$cari%' ");
}else{
	$result=mysqli_query($conn,"SELECT * FROM mahasiswa");
}







 ?>






<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<link rel="stylesheet" href="http://localhost/phpdasar/css/bootstrap.css">
</head>
<body>
	<h1>6.13</h1>
	<li class="d-flex justify-content-between align-items-center">
	<a href="tamba.php">HALAMAN TAMBAH</a>
	</li>
	<form action="" method="post">
		<li class="badge badge-primary">
		<input type="text" name="keyword" autocomplete="off" autofocus>
		
		<button type="submit" name="cari">cari</button>
		</li>

	</form>
	
			<div class="container mt-4">
		
			
			<li class="list-group-item d-flex justify-content-between align-items-center">
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
		<?php while ($ro=mysqli_fetch_assoc($result)) : ?>
				<tr>
				<td><?php echo $a; ?></td>
			<td><a href="hapuss.php?id=<?php echo $ro['id']; ?>" onclick="return confirm('YAKIN MAU HAPUS'); ">Hapus</a>|<a href="uda.php?id=<?php echo $ro['id']; ?>">Ubah</a></td>
			    <td><img src="<?php echo $ro['nama']; ?>"></td>
  				<td><?php echo $ro['nama']; ?></td>
  				<td><?php echo $ro['nrp']; ?></td>
  				<td><?php echo $ro['jurusan']; ?></td>
  				<td><?php echo $ro['email']; ?></td>
  				

  				</tr>
  				<?php $a++; ?>
	<?php endwhile; ?>
  			</li>

		
		</div>
		
	</table>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="http://localhost/phpdasar/js/bootstrap.js"></script>

</body>
</html>