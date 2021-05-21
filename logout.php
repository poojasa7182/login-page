<?php
    include "conection.php";

    $username = $_COOKIE["username"];
   
    $mysqli->query("UPDATE pooja_info SET logInfo = \"0\" WHERE username=\"" . $username . "\";");


    header('location:login1.html');

?>