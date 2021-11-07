<?php 

$conn=mysqli_connect("localhost","root","","phpdasar");

$result=mysqli_query($conn,"SELECT * FROM mahasiswa");

if (isset($_POST['cari'])) {
	$cari=$_POST['keyword'];
	$result=mysqli_query($conn,"SELECT * FROM mahasiswa WHERE nama LIKE '%$cari%' 		OR nrp LIKE '%$cari%' ");
}else{

	$result=mysqli_query($conn,"SELECT * FROM mahasiswa");
}


 ?>