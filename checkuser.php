<?php

    include "conection.php";

    $username = $_REQUEST["use"];

    $result = $mysqli->query("SELECT username FROM pooja_info WHERE username=\"" . $username . "\";");
    // if($result->num_rows>0){
    //     while($row = $result->fetch_assoc()){
    //         printf("Student Id: %s<br />",
    //         $row["username"],
    //     );
    //     }
    // }else{
    //     printf('No record found,<br/>');
    // }
    if($result->num_rows>0){
        echo "0";
    }else{
        echo "1";
    }


?>