<?php
    
    $sender = $_COOKIE["username"];
    $receiver = $_COOKIE["seconduser"];
    $message = $_REQUEST["message"];

    include "conection.php";
    
    //print_r("INSERT INTO info(`name`,username,email,pass,gender,phone) VALUES(\"" . $name . "\",\"" . $username . "\",\"" . $email . "\",\"" . $pass . "\",\"" . $gender . "\",\"" . $phone . "\")");
    $mysqli->query("INSERT INTO pooja_chat(sender,receiver,`message`) VALUES(\"" . $sender . "\",\"" . $receiver . "\",\"" . $message .  "\")");
    
   
    header('location:chat.php');
   
    // $err_username = $err_pass = $err_full = "";
    // $validated = false;
        
    // if($_SERVER["REQUEST_METHOD"] == "POST") {
    //     if(empty($username)) $err_username = "Field is required";
    //     if(empty($pass)) $err_pass = "Field is required";
    //     if(empty($full)) $err_full = "Field is required";
    //     if(!empty($username) && !empty($pass) &&!empty($full)) $validated=true;
    // }

?>