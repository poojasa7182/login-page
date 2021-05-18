<?php
$mysqli = mysqli_connect("localhost","root","@Adipoo2610","db");
if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}else{
   // echo "fine<br/>";
}


?>