<?php 

$conn=mysqli_connect("localhost","root","","phpdasar");

if (isset($_POST['submit'])) {
	$nama=$_POST['nama'];
	$nrp=$_POST['nrp'];
	$jurusan=$_POST['jurusan'];
	$email=$_POST['email'];
	$gambar=$_POST['gambar'];

	$query="INSERT INTO mahasiswa VALUES ('','$nama','$nrp','$email','$jurusan','$gambar') ";


	mysqli_query($conn,$query);

	if (mysqli_affected_rows($conn)>0) {
		echo "<script>
		alert('DATA ANDA BERHASIL DI TAMBAHKAN !!!')
		document.location.href='indexx.php'
			  </script>";
	}else{
		echo "data anda gagal di tambahkan";
		echo msyqli_error($conn);
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
		<ul>
			<li>
				<label for="nama">Nama--</label>
				<input type="text" name="nama" id="nama">
			</li><br>
			<li>
				<label for="nrp">Nrp----</label>
				<input type="text" name="nrp" id="nrp">
			</li><br>
			<li>
				<label for="jurusan">Jurusan</label>
				<input type="text" name="jurusan" id="jurusan">
			</li><br>
			<li>
				<label for="email">Email--</label>
				<input type="text" name="email" id="email">
			</li><br>
			<li>
				<label for="gambar">Gambar</label>
				<input type="text" name="gambar" id="gambar">
			</li><br>
			<button type="submit" name="submit">TAMBAHKAN DATA</button>
		</ul>
	</form>

</body>
</html>