<?php

    include "conection.php";

    $username = $_REQUEST["use"];
    $password = $_REQUEST["pass"];
    //echo("SELECT * FROM info WHERE username=\"" . $username . "\" AND pass=\"" . $password . "\";");
    $result = $mysqli->query("SELECT * FROM pooja_info WHERE username=\"" . $username . "\" AND pass=\"" . $password . "\";");
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
        echo "1";
    }else{
        echo "0";
    }


?>