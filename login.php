<?php
    include "conection.php";


    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username = $_POST['use'];
        $pass = $_POST['pass'];
        $rem = $_POST['remme'];

        $result = $mysqli->query("SELECT * FROM pooja_info WHERE usrename=\"" . $username . "\" AND pass=\"" . $pass . "\";");
        $res1 = $mysqli->query("UPDATE pooja_info SET logInfo = \"1\" WHERE username=\"" . $username . "\";");
        
        //if($result->num_rows >0){
            $cookie_1 = "username";
            setcookie( $cookie_1 ,$username);
        if(!empty($rem)){
            setcookie("remember","1");
        }
        else{
            setcookie("remember","0");
        }
        header("location:profile.php");
    }
    else{
        header("location:login1.html");
    }
        
    
?>