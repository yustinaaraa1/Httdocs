<?php 

$conn=mysqli_connect("localhost","root","","phpdasar");
$a=$_GET['id'];
$result=mysqli_query($conn,"SELECT * FROM mahasiswa WHERE id=$a");
$row=mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$nrp=$_POST['nrp'];
	$jurusan=$_POST['jurusan'];
	$email=$_POST['email'];
	$gambar=$_POST['gambar'];

	$query="UPDATE mahasiswa SET nama='$nama',
								 nrp='$nrp',
								 email='$email',
								 jurusan='$jurusan',
								 gambar='$gambar' 
								 WHERE id=$id ";


	mysqli_query($conn,$query);

	if (mysqli_affected_rows($conn)>0) {
		echo "<script>
		alert('DATA ANDA BERHASIL DIUBAH !!!')
		document.location.href='indexx.php'
			  </script>";
	}else{
		echo "data anda gagal diUBAH";
		
	}
}


 ?>




<!DOCTYPE html>
<html>
<head>
	<title>Halaman Tambah</title>
</head>
<body>
	<form action="" method="post">
		<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
		<ul>
			<li>
				<label for="nama">Nama--</label>
				<input type="text" name="nama" id="nama" value="<?php echo $row['nama']; ?>">
			</li><br>
			<li>
				<label for="nrp">Nrp----</label>
				<input type="text" name="nrp" id="nrp" value="<?php echo $row['nrp']; ?>">
			</li><br>
			<li>
				<label for="jurusan">Jurusan</label>
				<input type="text" name="jurusan" id="jurusan" value="<?php echo $row['jurusan']; ?>">
			</li><br>
			<li>
				<label for="email">Email--</label>
				<input type="text" name="email" id="email" value="<?php echo $row['email']; ?>">
			</li><br>
			<li>
				<label for="gambar">Gambar</label>
				<input type="text" name="gambar" id="gambar" value="<?php echo $row['gambar']; ?> ">
			</li><br>
			<button type="submit" name="submit">TAMBAHKAN DATA</button>
		</ul>
	</form>

</body>
</html>