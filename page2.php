<?php

    include "conection.php";

    $username = $_COOKIE['username'];
    
    //echo("SELECT * FROM info WHERE username=\"" . $username . "\" AND pass=\"" . $password . "\";");
    $result = $mysqli->query("SELECT * FROM pooja_info WHERE username=\"" . $username .  "\";");

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
    if($about==""||$dob=""||$about=NULL||$dob=NULL){
       
        header('location:updateProfile.php');
    }

    
?>


<html>
<head>
<title>Online Users</title>
<link rel="stylesheet" href="style.css">
<style>
    .content1{
        margin:0.1%;
        
        min-width: 90%;
        min-height:30px;
        background-color: rgb(58, 57, 57);  
    }
    .searchResults{
        margin-top: 5%;
        margin-right:4%;
    }
    .icon{
        border-radius:100%;
        border: 1px solid whitesmoke;
    }
     .content{
        display: flex;
        flex-direction: row-reverse;
        min-height:35px;
        /* align-content: space-around; */
    }
    .content2{
      justify-self: flex-end;
    }
    .buttons{
        width:80%;
        align-self:center;
        margin-top:1%;
    }
</style>
</head>
<body style="font-size: medium;" >
    <div class="seperate">
    <div class="login_tab">
        <div class="page2">
            <button  type="button" class="profileUpdate"><a href="profile.php" >Your Profile</a></button>
            <button  type="button"  class="profileUpdate"><a href="page2.php" >Users</a></button>
            <button type="button" class="profileUpdate"><a href="updateProfile.php">Update Profile</a></button>
            <button type="button" class="profileUpdate"><a href="logout.php">Logout</a></button>
            <br>
            <br>
            Search for the user you want to chat with.
            <div class="search">
                You can search for your friends here:<br>
                <input type="text" id="searchbox" name="search" onkeyup="find()">
                <button class="profileUpdate" id="search" onclick="find()">Search</button>
                <br>Search reasults:
                <div class="searchResults" id="id2" style="background-color: rgb(32, 32, 32);">
                
                </div>
            </div>
            <br>
            <br>
            <br>
            Online Users:
            <button class="profileUpdate" onclick="refresh()">Refresh</button>
            <div class="searchResults" id="id" style="background-color: rgb(32, 32, 32);">
                
            </div>
        </div>
    </div>
    <div class="login_tab">
        <div class="page2">
            All registered Users:
         <button class="profileUpdate" onclick="refresh1()">Refresh</button>
         <div class="searchResults" id="id1" style="background-color: rgb(32, 32, 32);">
                
        </div>
        </div>
        <button type="button" class="button" id="actual" style="display: none;"><a id="actual1" href="chat.php">chat</a></button><br>
    </div>
    </div>
    <script src="page2.js">
        
    </script>
</body>
</html>