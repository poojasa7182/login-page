<?php

    include "conection.php";

    $username = $_COOKIE["username"]; //us
    $user2 = $_COOKIE["seconduser"]; //other
    //$user2 = "b";
    //print_r("SELECT * FROM pooja_chat WHERE (sender=\"" . $user2 . "\" AND receiver=\"" . $username . "\") OR (sender=\"" . $username . "\" AND receiver=\"" . $user2 . "\") ; ");
    $result = $mysqli->query("SELECT * FROM pooja_chat WHERE (sender=\"" . $user2 . "\" AND receiver=\"" . $username . "\") OR (sender=\"" . $username . "\" AND receiver=\"" . $user2 . "\") ; ");
    
    
    
    echo("{\"data\":[");
        if($result->num_rows>0){
            
            
                while($row = $result->fetch_assoc()){
                    printf("{\"sender\":\" %s \",\"receiver\":\" %s \",\"message\":\" %s \"},",
                    $row["sender"],
                    $row["receiver"],
                    $row["message"],
                );
                }
               
            }
        
        echo("{\"sender\": \"\",\"receiver\": \"\",\"message\":\"\"}]}");


?>