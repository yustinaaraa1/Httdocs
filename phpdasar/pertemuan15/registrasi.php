<?php 
require 'function.php';

if (isset($_POST['Register'])) {
	if (registrasi($_POST)>0) {
		echo "<script>
		alert('User Baru Berhasil Di Tambahkan')
		</script> ";
	}else{
		echo mysqli_error($conn);
	}

}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
</head>
<body>
	<h3>Halaman Registrasi</h3>
	<form action="" method="post">
		<ul>
			<li>
				<label for="username">Username :</label><br>
				<input type="text" name="username" id="username">
			</li><br>
			<li>
				<label for="password">Password :</label><br>
				<input type="password" name="password" id="password">
			</li><br>
			<li>
				<label for="password2">Konfirmasi :</label><br>
				<input type="password" name="password2" id="password2">
			</li><br>
			<li>
				<button type="submit" name="Register">Register</button>
			</li>
		</ul>
	</form>

</body>
</html>