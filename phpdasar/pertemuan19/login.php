<?php 
session_start();
require 'function.php';
if (isset($_COOKIE['id'])&& isset($_COOKIE['key'])) {
	$id=$_COOKIE['id'];
	$key=$_COOKIE['key'];

	$result=mysqli_query($conn,"SELECT username FROM user WHERE id=$id ");

	$row=mysqli_fetch_assoc($result);

	//cek cookie dan usename
	if ($key===hash('sha256', $row['username'])) {
		$_SESSION['login']=true;
	}
	
	}

if (isset($_SESSION["login"])) {
	header("Location: index.php");
	exit();
}


if (isset($_POST["login"])) {
	$username=$_POST["username"];
	$password=$_POST["password"];


	$result=mysqli_query($conn,"SELECT * FROM user WHERE username='$username' ");

	//cek username
	if (mysqli_num_rows($result)===1) {
		//cek password
		$row=mysqli_fetch_assoc($result);

		if (password_verify($password, $row["password"])) {
			//set session
			$_SESSION["login"]=true;
			//cek remember me

			if (isset($_POST['remember'])) {
				setcookie('id',$row['id'], time()+61);
				setcookie('key',hash('sha256', $row['username']),time()+61);
			}
			header("Location: index.php");


			exit;
		}
	}
	$error=true;


}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>
	<h1>Selamat Datang Di Halaman Login</h1>

		<?php if(isset($error)) : ?>
			<p style="color: red; font-style: italic;">pasword/username salah</p>
		<?php endif; ?>

	<form action="" method="post">
		<ul>
			<li>
				<label for="username">Username</label><br>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">Password</label><br>
				<input type="password" name="password" id="password">
				
			</li>
			<li>
				<input type="checkbox" name="remember" id="remember">
				<label for="remember">Remember Me</label>
			</li><br>
			
			<li>
				<button type="submit" name="login">Login</button>
			</li>
		</ul>
		
	</form>

</body>
</html>