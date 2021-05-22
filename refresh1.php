<?php
    include "conection.php";

    $result = $mysqli->query("SELECT username,`name` , `image` FROM pooja_info ");
    //print_r($result);
    $count = $result->num_rows;
    // $count--;
    // echo($count);
    // echo("{\"data\":[{\"Username\": \"sfervt5\",\"Name\": \"Pooja A\"
    // },{\"Username\": \"sfervt51\",\"Name\": \"ishu\"
    // }]}");
    echo("{\"data\":[");
    if($result->num_rows>0){
        // while($count>1){
        
        
            while($row = $result->fetch_assoc()){
                $username =  $row["username"];
                $name = $row["name"];
                $image = $row["image"];
                echo("{\"Username\":\" " . $username . " \",\"Name\":\" " . $name . " \",\"image\":\" " . $image . " \"},");
                // printf("{\"Username\":\" %s \",\"Name\":\" %s \",\"image\":\" %s \"},",
                // $row["username"],
                // $row["name"],
                // $row["image"],
            //);
            }
            //$count--;
        //}
       
       
        
    }else{
        printf('No record found,<br />');
    }
    echo("{\"Username\": \"\",\"Name\": \"\",\"image\":\"\"}]}");

?>