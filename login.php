<?php
    include "conection.php";

    $username = $_POST['use'];
    $pass = $_POST['pass'];

    $result = $mysqli->query("SELECT * FROM info WHERE usrename=\"" . $username . "\" AND pass=\"" . $pass . "\";");

    if($result->num_rows==0){
        return true;
    }else{
        return false;
    }
?>