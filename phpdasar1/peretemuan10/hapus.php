<?php 

$conn=mysqli_connect("localhost","root","","phpdasar");

$ab=$_GET['id'];
$b=("DELETE FROM mahasiswa WHERE id=$ab ");
mysqli_query($conn,$b);

if (mysqli_affected_rows($conn)>0) {
	echo "<script>
		alert('Data Berhasil di hapus')
		document.location.href='index.php'
		</script>";
}else{
	echo "<script>
		alert('Data gagal dihapus')
		document.location.href='index.php'
		</script>";
	echo mysqli_error($conn);
}

 ?>