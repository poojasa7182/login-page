<?php
    $name = $_POST['name'];
    $username = $_POST['use'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $gender = $_POST['gender'];
    $phone = $_POST['phoneNo'];

    include "conection.php";

    //print_r("INSERT INTO info(`name`,username,email,pass,gender,phone) VALUES(\"" . $name . "\",\"" . $username . "\",\"" . $email . "\",\"" . $pass . "\",\"" . $gender . "\",\"" . $phone . "\")");
    $mysqli->query("INSERT INTO info(`name`,username,email,pass,gender,phone) VALUES(\"" . $name . "\",\"" . $username . "\",\"" . $email . "\",\"" . $pass . "\",\"" . $gender . "\",\"" . $phone . "\")");

    // $err_username = $err_pass = $err_full = "";
    // $validated = false;
        
    // if($_SERVER["REQUEST_METHOD"] == "POST") {
    //     if(empty($username)) $err_username = "Field is required";
    //     if(empty($pass)) $err_pass = "Field is required";
    //     if(empty($full)) $err_full = "Field is required";
    //     if(!empty($username) && !empty($pass) &&!empty($full)) $validated=true;
    // }

?>