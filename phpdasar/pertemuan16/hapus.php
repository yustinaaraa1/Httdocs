<?php 
session_start();
if (!isset($_SESSION["login"])) {
	header("Location: login.php");
}
require 'function.php';
$id=$_GET['id'];

if (hapus($id)>0) {
	echo "<script>
		alert('Data Berhasil Di Hapus')
		document.location.href='index.php'
		</script> ";
	}else{
		echo "<script>
		alert('Data Berhasil Di Hapus')
		document.location.href='index.php'
		</script> ";
		echo mysqli_error($conn);
	}
	



 ?>