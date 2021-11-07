<?php 
require 'function.php';
$id=$_GET['id'];
$mhs=query("SELECT * FROM mahasiswa WHERE id=$id")[0];
if (isset($_POST['submit'])) {
	

	

	if (ubah($_POST)>0) {
		echo "<script>
		alert('Data Berhasil Di Ubah')
		document.location.href='index.php'
		</script> ";
	}else{
		echo "<script>
		alert('Data Berhasil Di Ubah')
		document.location.href='index.php'
		</script> ";		
		echo mysqli_error($conn);
	}


}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Mahasiswa</title>
</head>
<body>
	<div>
		<h4>Ubah Data Mahasiswa</h4>
	<form action="" method="post">
		<ul>
			<input type="hidden" name="id" value="<?php echo $mhs['id']; ?>">
			<li>
				<label for="nama">Nama--</label>
				<input type="text" name="nama" id="nama" value="<?php echo $mhs['nama']; ?>">
			</li><br>
			<li>
				<label for="nrp">Nrp-----</label>
				<input type="text" name="nrp" id="nrp" value="<?php echo $mhs['nrp']; ?>">
			</li><br>
			<li>
				<label for="email">Email--</label>
				<input type="text" name="email" id="email" value="<?php echo $mhs['email']; ?>">
			</li><br>
			<li>
				<label for="jurusan">Jurusan</label> 
				<input type="text" name="jurusan" id="jurusan" value="<?php echo $mhs['jurusan']; ?>"> 
			</li><br>
			<li>
				<label for="gambar">Gambar</label>
				<input type="text" name="gambar" id="gambar" value="<?php echo $mhs['gambar']; ?>">
			</li><br>
			<button type="submit" name="submit">Ubah Data</button>
		</ul>
	</form>
	</div>

</body>
</html>