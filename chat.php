<?php

    include "conection.php";

    $user2 = $_COOKIE['seconduser'];
    
    $result = $mysqli->query("SELECT * FROM pooja_info WHERE username=\"" . $user2 .  "\";");
    //echo("SELECT * FROM pooja_info WHERE username=\"" . $user2 .  "\";");
    if($result->num_rows>0){
         while($row = $result->fetch_assoc()){
   
       $name = $row["name"];
       $gender = $row["gender"];
       $about = $row["about"];
       $dob = $row["dob"];
       $phone = $row["phone"];
       $email = $row["email"];
       $pass = $row["pass"];
       $image= $row["image"];
    }
}   

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>chat</title>
    <link rel="stylesheet" href="chat.css">
    <style>
        .button{
            width:40%;
            margin-left:30%;
            margin-top: 2%;
            height:50%;
            color:salmon;
            font-size: 100%;
            font-weight: 200;
            align-content: center;
            background-color:rgb(46, 48, 46);
            text-align: center;
            border: 2px solid salmon;
            border-radius: 10px;
        }
        a ,a:link, a:visited  ,a:hover, a:active{
            text-decoration: none;
            text-decoration-color: rgb(235, 191, 187);
            color: rgb(235, 191, 187);
        }
    </style>
</head>
<body>
<button class="button" type="button"><a href="page2.html">Back to User List</a></button>
    <div class="chat-box">
        <div class="chat-head">
            <div class="profile-photo">
                
            </div>
            <div class="chat-name" id="user2name">
            <?php 
                print(
                    $name
                );
                    ?>

            </div>
            <div class="user-list">
                <button class="list" type="menu" id="list">INFO</button>
            </div>
        </div>
        <div class="chat-display">
        <div class="chat-body" id="chat_body">
                       
        </div>
        <div class="list-user">
            <div class="info"><?php 
                print(
                    $user2
                );
                    ?></div>
            <div class="name-list">
        
            <div class="user user1"><?php 
                print(
                    $email
                );
                    ?></div>
            <div class="user user1"><?php 
                print(
                    $phone
                );
                    ?></div>
            <div class="user user1"><?php 
                print(
                    $about
                );
                    ?></div>
            </div>
        </div>
        </div>
        <div class="chat-send">
            <form action="#" id="send-container">
                <input type="text" name="messageInp" Id="messageInp">
                <button class="btn" type="submit" onclick="send()">Send</button>
            </form>
        </div>
    </div>
    
    <script src="chat.js"></script>
    
</body>
</html>