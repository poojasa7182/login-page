<?php
    include "conection.php";

    $username = $_COOKIE["username"];
   
    $mysqli->query("UPDATE pooja_info SET logInfo = \"0\" WHERE username=\"" . $username . "\";");

    if($_COOKIE['remember']==1){

    }
    else{
        setcookie("username", "" , time()-3600);
        setcookie("password", "" , time()-3600);
        setcookie("remember", "" , time()-3600);
    }
   

    header('location:login1.php');

?>