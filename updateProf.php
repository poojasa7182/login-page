<?php
    include "conection.php";
    
    $username = $_COOKIE["username"];
    $name = $_POST['name'];
    $username1 = $_POST['use'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $phone = $_POST['phoneNo'];
    $about = $_POST['about'];
    $image = $_POST['image'];
    
    if($name!=""){
        $mysqli->query("UPDATE info SET `name`=\"" . $name . "\" WHERE username=\"" . $username . "\"");
    }
    if($gender!=""){
        $mysqli->query("UPDATE info SET gender=\"" . $gender . "\" WHERE username=\"" . $username . "\"");
    }
    if($dob!=""){
        $mysqli->query("UPDATE info SET dob=\"" . $dob . "\" WHERE username=\"" . $username . "\"");
    }
    if($email!=""){
        $mysqli->query("UPDATE info SET email=\"" . $email . "\" WHERE username=\"" . $username . "\"");
    }
    if($pass!=""){
        $mysqli->query("UPDATE info SET pass=\"" . $pass . "\" WHERE username=\"" . $username . "\"");
    }
    if($phone!=""){
        $mysqli->query("UPDATE info SET phone=\"" . $phone . "\" WHERE username=\"" . $username . "\"");
    }
    if($about!=""){
        $mysqli->query("UPDATE info SET about=\"" . $about . "\" WHERE username=\"" . $username . "\"");
    }
    if($image!=""){
        $mysqli->query("UPDATE info SET about=\"" . $image . "\" WHERE username=\"" . $username . "\"");
    }
    if($username1!=""){
        $mysqli->query("UPDATE info SET username=\"" . $username1 . "\" WHERE username=\"" . $username . "\"");
    }
    setcookie("username",$username1);
    header('location:updateProfile.php');
    

    

?>