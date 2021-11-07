<?php 
require 'function.php';
if (isset($_POST['submit'])) {
	

	

	if (tambah($_POST)>0) {
		echo "<script>
		alert('Data Berhasil Di Tambahkan')
		document.location.href='index.php'
		</script> ";
	}else{
		echo "<script>
		alert('Data Berhasil Di Tambahkan')
		document.location.href='index.php'
		</script> ";
		echo mysqli_error($conn);
	}


}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mahasiswa</title>
</head>
<body>
	<div>
		<h4>Tambah Data Mahasiswa</h4>
	<form action="" method="post">
		<ul>
			<li>
				<label for="nama">Nama--</label>
				<input type="text" name="nama" id="nama">
			</li><br>
			<li>
				<label for="nrp">Nrp-----</label>
				<input type="text" name="nrp" id="nrp">
			</li><br>
			<li>
				<label for="email">Email--</label>
				<input type="text" name="email" id="email">
			</li><br>
			<li>
				<label for="jurusan">Jurusan</label> 
				<input type="text" name="jurusan" id="jurusan"> 
			</li><br>
			<li>
				<label for="gambar">Gambar</label>
				<input type="text" name="gambar" id="gambar">
			</li><br>
			<button type="submit" name="submit">Tambah Data</button>
		</ul>
	</form>
	</div>

</body>
</html>