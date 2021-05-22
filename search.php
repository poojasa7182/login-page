<?php

    include "conection.php";

    $username = $_REQUEST["use"];
    //print_r()
    $result = $mysqli->query("SELECT DISTINCT username , `name`, `image` FROM pooja_info WHERE username REGEXP '" . $username . "' OR `name` REGEXP '" . $username . "';");
   
    
    
    echo("{\"data\":[");
        if($result->num_rows>0){
            
            
                while($row = $result->fetch_assoc()){
                    $username =  $row["username"];
                    $name = $row["name"];
                    $image = $row["image"];
                    echo("{\"Username\":\" " . $username . " \",\"Name\":\" " . $name . " \",\"image\":\" " . $image . " \"},");
                //     printf("{\"Username\":\" %s \",\"Name\":\" %s \",\"image\":\" %s \"},",
                //     $row["username"],
                //     $row["name"],
                //     $row["image"],
                // );
                }
               
            }
           
           
            
        
        echo("{\"Username\": \"\",\"Name\": \"\",\"image\":\"\"}]}");


?>