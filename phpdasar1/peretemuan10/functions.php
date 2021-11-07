<?php 	

$conn=mysqli_connect("localhost","root","","phpdasar");


function query($query){
 global $conn;
	$result=mysqli_query($conn,$query);
	$ros=[];
	while ($row=mysqli_fetch_assoc($result)) {
		$ros[]=$row;
	}
	return $ros;
}


function tambah($data){
	global $conn;
	$a=$data['nama'];
	$b=$data['nrp'];
	$c=$data['jurusan'];
	$d=$data['email'];
	$e=$data['gambar'];

	$query="INSERT INTO mahasiswa VALUES ('','$a','$b','$c','$d','$e')  ";




	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);



}



function ubah($data){
	global $conn;
	$id=$data["id"];
	$nama=$data["nam"];
	$nrp=$data["nr"];
	$jurusan=$data["jurusa"];
	$email=$data["emai"];
	$gambar=$data["gamba"];

	$query="UPDATE mahasiswa SET 
				nama='$nama',
				nrp='$nrp',
				jurusan='$jurusan',
				email='$email',
				gambar='$gambar' 
				WHERE id=$id
				 ";




	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);





}








 ?>