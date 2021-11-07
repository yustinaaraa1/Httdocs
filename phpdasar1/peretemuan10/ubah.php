<?php 	
require 'functions.php';


//ambil data di url
$id=$_GET['id'];

$mhs=query("SELECT * FROM mahasiswa WHERE id=$id")[0];



if (isset($_POST['submit'])) {
	

	if (ubah($_POST)>0) {
		echo "<script>
		alert('Data Berhasil di ubah')
		document.location.href='index.php'
		</script>";

	}else{
		echo "<script>
		alert('Data gagal di ubah')
		document.location.href='index.php'
		</script>";
		echo mysqli_error($conn);
	}
	
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>	Halaman Tambah</title>
</head>
<body>
	<form action="" method="post">
		<ul>
				<input type="hidden" name="id" value="<?php 	echo $mhs["id"]; ?> ">
			<li>
				<label for="nama">Nama--</label>
				<input type="text" name="nam" id="nama" value="<?php 	echo $mhs['nama']; ?> ">
			</li><br>	
			<li>
				<label for="nrp">Nrp----</label>
				<input type="text" name="nr" id="nrp" value="<?php 	echo $mhs['nrp']; ?> ">
			</li><br>	
			<li>
				<label for="Jurusan">Jurusan</label>
				<input type="text" name="jurusa" id="Jurusan" value="<?php 	echo $mhs['jurusan']; ?> ">
			</li><br>	
			<li>
				<label for="email">Email--</label>
				<input type="text" name="emai" id="email" value="<?php 	echo $mhs['email']; ?> ">
			</li><br>	
			<li>
				<label for="gambar">Gambar</label>
				<input type="text" name="gamba" id="gambar" value="<?php 	echo $mhs['gambar']; ?> ">
			</li><br>	
			<li>
				<button type="submit" name="submit">UBAH DATA</button>
			</li>
		</ul>
	</form>

</body>
</html>