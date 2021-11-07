<?php 	
$conn=mysqli_connect("localhost","root","","phpdasar");

$id=$_GET['id'];

$mhs=mysqli_query($conn,"SELECT * FROM mahasiswa WHERE id=$id");
$row=mysqli_fetch_assoc($mhs);



if (isset($_POST['submit'])) {
$id=$_POST["id"];
	$nama=$_POST["nama"];
	$nrp=$_POST["nrp"];
	$jurusan=$_POST["jurusan"];
	$email=$_POST["email"];
	$gambar=$_POST["gambar"];

	$query="UPDATE mahasiswa SET 
				nama='$nama',
				nrp='$nrp',
				jurusan='$jurusan',
				email='$email',
				gambar='$gambar' 
				WHERE id=$id
				 ";




	mysqli_query($conn, $query);





	

	if (mysqli_affected_rows($conn)>0) {
		echo "<script>
		alert('Data Berhasil diubah')
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
			<input type="hidden" name="id"  value=" <?php echo $row['id'] ?> ">
			<li>
				<label for="nama">Nama--</label>
				<input type="text" name="nama" id="nama" value=" <?php echo $row['nama'] ?> ">
			</li><br>	
			<li>
				<label for="nrp">Nrp----</label>
				<input type="text" name="nrp" id="nrp" value=" <?php echo $row['nrp'] ?> ">
			</li><br>	
			<li>
				<label for="Jurusan">Jurusan</label>
				<input type="text" name="jurusan" id="Jurusan" value=" <?php echo $row['jurusan'] ?> ">
			</li><br>	
			<li>
				<label for="email">Email--</label>
				<input type="text" name="email" id="email" value=" <?php echo $row['email'] ?> ">
			</li><br>	
			<li>
				<label for="gambar">Gambar</label>
				<input type="text" name="gambar" id="gambar" value="<?php echo $row['gambar'] ?>">
			</li><br>	
			<li>
				<button type="submit" name="submit">UBAH DATA</button>
			</li>
		</ul>
	</form>

</body>
</html>