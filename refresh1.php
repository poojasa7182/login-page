<?php
    include "conection.php";

    $result = $mysqli->query("SELECT username,`name` FROM info ");
    //print_r($result);
    $count = $result->num_rows;
    // $count--;
    // echo($count);
    // echo("{\"data\":[{\"Username\": \"sfervt5\",\"Name\": \"Pooja A\"
    // },{\"Username\": \"sfervt51\",\"Name\": \"ishu\"
    // }]}");
    echo("{\"data\":[");
    if($result->num_rows>0){
        while($count>1){
        
        
            while($row = $result->fetch_assoc()){
                printf("{\"Username\":\" %s \",\"Name\":\" %s \"},",
                $row["username"],
                $row["name"],
            );
            }
            $count--;
        }
       
       
        
    }else{
        printf('No record found,<br />');
    }
    echo("{\"Username\": \"\",\"Name\": \"\"}]}");

?>