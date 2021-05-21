<?php
    include "conection.php";

    $username = $_COOKIE["username"];
   
    $mysqli->query("UPDATE info SET logInfo = \"0\" WHERE username=\"" . $username . "\";");


    header('location:login1.html');

?>