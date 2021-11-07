<?php
 // open koneksi ke database
 define("db_host", "localhost");
 define("db_user", "root");
 define("db_pass", "");
 define("db_name", "belajar_template");
 
 $konek = mysqli_connect(db_host, db_user, db_pass, db_name);
 if (!$konek){
  die("Error!");
 }
 
 // ===
 
 $email = $_POST['email'];
 $password = $_POST['password'];
 
 // perintah untuk mendapatkan user dari db berdasarkan nama yang di input di form login
 $get_user = "SELECT * FROM users WHERE email = '$email'";
 $result = mysqli_query($konek,$get_user);
 $data = mysqli_fetch_array($result);
 if($data){
  // email yang dimasukan ada di db
  // check password
  if($password == $data['password']){
   Header("Location: index.html");
  }else{
   Header("Location: login.html");
  }
 }else{
  Header("Location: login.html");
 }
?>

