<?php


 session_start();

if (!isset($_SESSION["login"])) {
	header("Location: login.php");
}

require 'function.php';


if (isset($_POST['cari'])) {
	$keyword=$_POST['keyword'];
	$_SESSION['keyword']=$keyword;
}else{

$keyword=$_SESSION['keyword'];
}

//kofigurasi pagination

$ambilData=mysqli_query($conn,"SELECT * FROM Mahasiswa WHERE nama LIKE  '%$keyword%' OR
															 nrp LIKE '%$keyword%' OR
															 email LIKE  '%$keyword%' OR
															 jurusan LIKE  '%$keyword%' ");

$jumlahData=3;
$totalData=mysqli_num_rows($ambilData);
$jumlahPagination=ceil($totalData / $jumlahData);





if (isset($_GET['halaman'])) {
	$halamanAktif=$_GET['halaman'];

}else{
	$halamanAktif=1;
}

$dataAwal=($halamanAktif * $jumlahData)-$jumlahData;
$jumlahLink=3;
if ($halamanAktif>$jumlahLink) {
	$start_number=$halamanAktif-$jumlahLink;

}else{
	$start_number=1;
}
if ($halamanAktif<($jumlahPagination-$jumlahLink)) {
	$end_number=$halamanAktif+$jumlahLink;
}else{
	$end_number=$jumlahPagination;
}

$ambilDataPerhalaman=mysqli_query($conn,"SELECT * FROM Mahasiswa WHERE nama LIKE '%$keyword%' OR 
																	   nrp LIKE '%$keyword%' OR
																	   email LIKE  '%$keyword%' OR
																	   jurusan LIKE  '%$keyword%' LIMIT $dataAwal, $jumlahData ");






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
	<!--Pagination-->
	<?php if ($halamanAktif>1): ?>
		<a href="?halaman=<?php echo $halamanAktif-1; ?>">&laquo</a>
	<?php endif; ?>
	<?php for ($i=$start_number; $i <= $end_number; $i++) : ?>
	<?php if ($halamanAktif == $i): ?>
		<a href="?halaman=<?php echo $i; ?>" style="color: red; "><?php echo $i; ?></a>
	<?php else: ?>
		<a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
	<?php endif ?>

	
	<?php endfor; ?>
	<?php if ($halamanAktif<$jumlahPagination): ?>
		<a href="?halaman=<?php echo $halamanAktif+1; ?>">&raquo</a>
	<?php endif; ?>
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
		<?php foreach ($ambilDataPerhalaman as $mhs): ?>
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