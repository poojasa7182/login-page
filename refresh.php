<?php
    include "conection.php";

    $result = $mysqli->query("SELECT username,`name`,`image` FROM pooja_info WHERE logInfo=\"1\"");
    //print_r($result);
    $count = $result->num_rows;
    
    echo("{\"data\":[");
    if($result->num_rows>0){
        while($count>1){
        
        
            while($row = $result->fetch_assoc()){
                printf("{\"Username\":\" %s \",\"Name\":\" %s \",\"image\":\" %s \"},",
                $row["username"],
                $row["name"],
                $row["image"],
            );
            }
            $count--;
        }
       
       
        
    }else{
        printf('No record found,<br />');
    }
    echo("{\"Username\": \"\",\"Name\": \"\",\"image\":\"\"}]}");

?>