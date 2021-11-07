<?php 
$conn=mysqli_connect("localhost","root","","phpdasar");


function query($query){
	global $conn;
	$result=mysqli_query($conn, $query);
	$rows=[];
	while ($row=mysqli_fetch_assoc($result)) {
		$rows[]=$row;
		
	}
	return $rows;
}


function tambah($data){
	global $conn;

	$nama=htmlspecialchars($data['nama']);
	$nrp=htmlspecialchars($data['nrp']);
	$email=htmlspecialchars($data['email']);
	$jurusan=htmlspecialchars($data['jurusan']);
	
	//UPLOAD GAMBAR
	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	$query="INSERT INTO mahasiswa 
						VALUES('',
						'$nama',
						'$nrp',
						'$email',
						'$jurusan',
						'$gambar') ";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);


}

function upload(){
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile=$_FILES['gambar']['size'];
	$error=$_FILES['gambar']['error'];
	$tmpName=$_FILES['gambar']['tmp_name'];

	//cek apakah gambar tidak di upload

	if ($error===4) {
		echo "<script>
		alert('Pilih Gambar dulu')
		</script> ";
		return false;
	}

	//cegah uploadan lain atau file/documen
	$ekstensiGambarValid = ['jpg','jpeg','png'];
	$ekstensiGambar= explode('.', $namaFile);
	$ekstensiGambar=strtolower( end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
		alert('Yang anda upload bukan gambar')
		</script> ";
		return false;
	}

	//cek gambar apabila terlalu besar
	if ($ukuranFile>10000000) {
		echo "<script>
		alert('Ukuran gambar terlalu besar')
		</script> ";
		return false;
	}

	//lolos pengecekan
	//ganti nama baru ke volder img
	$namaFileBaru = uniqid();
	$namaFileBaru .='.';
	$namaFileBaru .= $ekstensiGambar;



	
	move_uploaded_file($tmpName, 'img/'.$namaFileBaru);
	return $namaFileBaru;

}

function hapus($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM mahasiswa WHERE id = $id");
	return mysqli_affected_rows($conn);
}


function ubah($data){
	global $conn;
	$id=htmlspecialchars($data['id']);
	$nama=htmlspecialchars($data['nama']);
	$nrp=htmlspecialchars($data['nrp']);
	$email=htmlspecialchars($data['email']);
	$jurusan=htmlspecialchars($data['jurusan']);
	$gambar=htmlspecialchars($data['gambarLama']);

// cek apakah user pilih gambar baru atau tidak
	if ($_FILES['gambar']['error']===4) {
		$gambar=$gambarLama;
	}else{
		$gambar=upload();
	}


	

	$query="UPDATE mahasiswa SET 
					nama='$nama',
					nrp='$nrp',
					email='$email',
					jurusan='$jurusan',
					gambar='$gambar' 
					WHERE id=$id ";
	mysqli_query($conn,$query); 

	return mysqli_affected_rows($conn);


}

	function cari($keyword){
		global $conn;

		$query="SELECT * FROM mahasiswa WHERE nama Like '%$keyword%' OR 
											  nrp Like '%$keyword%' OR
											  email Like '%$keyword%' OR
											  jurusan Like '%$keyword%'";

		return query($query);



	}

	function registrasi($data){
		global $conn;
		$username= strtolower(stripcslashes($data['username']));
		$password= mysqli_real_escape_string($conn, $data['password']);
		$password2=mysqli_real_escape_string($conn, $data['password2']);

		//cek apakah username sudah ada atau belom
		$result=mysqli_query($conn,"SELECT username FROM user WHERE username='$username' ");
		if (mysqli_fetch_assoc($result)) {
			echo "<script>
		alert('Username sudah terdaftar')
		</script> ";
		return false;
		}

		//cek konfirmasi password
		if ($password!==$password2) {
			echo "<script>
		alert('Konfirmasi Password tidak sesuai')
		</script> ";
		return false;
		}
		//enkripsi password
		$password=Password_hash($password, PASSWORD_DEFAULT);
		mysqli_query($conn,"INSERT INTO user VALUES('','$username','$password') ");

		return mysqli_affected_rows($conn);
	}

 ?>
