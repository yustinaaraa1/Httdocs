<?php 
$conn=mysqli_connect('localhost','root','','phpdasar');
$a=$_GET['id'];

mysqli_query($conn,"DELETE FROM mahasiswa WHERE id=$a");

if (mysqli_affected_rows($conn)>0) {
	echo "<script>
		alert('DATA ANDA BERHASIL DIHAPUS !!!')
		document.location.href='indexx.php'
			  </script>";
}else{
	echo "Data anda gagal di hapus";
	echo mysqli_error($conn);
}



 ?>