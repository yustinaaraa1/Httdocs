<?php 
$conn=mysqli_connect('localhost','root','','phpdasar');



$result=mysqli_query($conn,"SELECT * FROM mahasiswa");
$ros=mysqli_fetch_assoc($result);

echo ($ros);



 ?>